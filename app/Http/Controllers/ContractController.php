<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContractController extends Controller
{
    public function dashboard()
    {
        $criticalDays = (int) Setting::getValue('critical_days', 30);
        $nearDays = (int) Setting::getValue('near_days', 60);

        $contracts = Contract::latest()->get();

        $today = now()->startOfDay();

        $totalContracts = Contract::count();

        $activeContracts = Contract::whereDate(
            'tanggal_berakhir',
            '>=',
            $today
        )->count();

        $expiringThisMonth = Contract::whereBetween(
            'tanggal_berakhir',
            [
                now()->startOfMonth(),
                now()->endOfMonth()
            ]
        )->count();

        $expiredContracts = Contract::whereDate(
            'tanggal_berakhir',
            '<',
            $today
        )->count();

        $totalValue = Contract::sum('nilai_kontrak');

        $user = Auth::user();

        return view('dashboard', compact(
            'contracts',
            'totalContracts',
            'activeContracts',
            'expiringThisMonth',
            'expiredContracts',
            'totalValue',
            'criticalDays',
            'nearDays',
            'user'
        ));
    }

    public function index(Request $request)
    {
        $query = Contract::query();

        if ($request->filled('search')) {

            $search = $request->search;

            $query->where(function ($q) use ($search) {

                $q->where('kode', 'like', "%{$search}%")
                    ->orWhere('judul', 'like', "%{$search}%")
                    ->orWhere('pihak', 'like', "%{$search}%");

            });
        }

        if ($request->filled('kategori')) {
            $query->where(
                'kategori',
                $request->kategori
            );
        }

        if ($request->filled('status')) {
            $query->where(
                'status',
                $request->status
            );
        }

        $contracts = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view(
            'contracts.index',
            compact('contracts')
        );
    }

    public function create()
    {
        return view('contracts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([

            'judul' => [
                'required',
                'string',
                'max:255'
            ],

            'kategori' => [
                'required',
                'in:Karyawan,Vendor,Sub-kontraktor,Klien'
            ],

            'pihak' => [
                'required',
                'string',
                'max:255'
            ],

            'penanggung_jawab' => [
                'required',
                'string',
                'max:255'
            ],

            'tanggal_mulai' => [
                'required',
                'date'
            ],

            'tanggal_berakhir' => [
                'required',
                'date',
                'after:tanggal_mulai'
            ],

            'nilai_kontrak' => [
                'required',
                'numeric',
                'min:0'
            ],

            'status' => [
                'required',
                'in:Draft,Review Internal,Review Eksternal,Revisi,Menunggu Tanda Tangan,Selesai Ditandatangani'
            ],

            'keterangan' => [
                'nullable',
                'string'
            ],
        ]);

        $validated['kode'] =
            'KTR-' .
            now()->format('YmdHis') .
            '-' .
            random_int(10, 99);

        Contract::create($validated);

        return redirect('/dashboard#tambah')
            ->with(
                'success',
                'Kontrak berhasil ditambahkan.'
            );
    }

    public function show(Contract $contract)
    {
        return view(
            'contracts.show',
            compact('contract')
        );
    }

    public function edit(Contract $contract)
    {
        return view(
            'contracts.edit',
            compact('contract')
        );
    }

    public function update(
        Request $request,
        Contract $contract
    ) {

        $validated = $request->validate([

            'judul' => [
                'required',
                'string',
                'max:255'
            ],

            'kategori' => [
                'required',
                'in:Karyawan,Vendor,Sub-kontraktor,Klien'
            ],

            'pihak' => [
                'required',
                'string',
                'max:255'
            ],

            'penanggung_jawab' => [
                'required',
                'string',
                'max:255'
            ],

            'tanggal_mulai' => [
                'required',
                'date'
            ],

            'tanggal_berakhir' => [
                'required',
                'date',
                'after:tanggal_mulai'
            ],

            'nilai_kontrak' => [
                'required',
                'numeric',
                'min:0'
            ],

            'status' => [
                'required',
                'in:Draft,Review Internal,Review Eksternal,Revisi,Menunggu Tanda Tangan,Selesai Ditandatangani'
            ],

            'keterangan' => [
                'nullable',
                'string'
            ],
        ]);

        $contract->update($validated);

        return redirect('/dashboard#daftar')
            ->with(
                'success',
                'Kontrak berhasil diperbarui.'
            );
    }

    public function destroy(Contract $contract)
    {
        $contract->delete();

        return redirect('/dashboard#daftar')
            ->with(
                'success',
                'Kontrak berhasil dihapus.'
            );
    }

    public function updateReminderSettings(
        Request $request
    ) {

        $validated = $request->validate([

            'critical_days' => [
                'required',
                'integer',
                'min:1'
            ],

            'near_days' => [
                'required',
                'integer',
                'gt:critical_days'
            ],
        ]);

        Setting::setValue(
            'critical_days',
            $validated['critical_days']
        );

        Setting::setValue(
            'near_days',
            $validated['near_days']
        );

        return redirect('/dashboard#pengaturan')
            ->with(
                'success',
                'Pengaturan pengingat berhasil disimpan.'
            );
    }
}