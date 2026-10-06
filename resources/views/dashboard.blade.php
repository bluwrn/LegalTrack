<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>LegalTrack - Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>
    

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: '#0f172a',
                        primary: '#1d4ed8'
                    }
                }
            }
        }
    </script>

</head>


<body class="bg-slate-100 text-slate-800">


<div class="flex min-h-screen">


    {{-- ========================================================= --}}
    {{-- SIDEBAR --}}
    {{-- ========================================================= --}}

    <aside
        id="sidebar"
        class="fixed inset-y-0 left-0 z-50
               w-64 bg-slate-900 text-white
               transform -translate-x-full
               lg:translate-x-0
               transition-transform duration-300"
    >

        <div class="flex flex-col h-full">


            {{-- LOGO --}}
            <div class="px-6 py-6 border-b border-slate-700">

                <div class="flex items-center gap-3">

                    <div
                        class="w-11 h-11 rounded-xl
                               bg-blue-600
                               flex items-center justify-center"
                    >

                        <svg
                            class="w-6 h-6 text-white"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h7l5 5v11a2 2 0 0 1-2 2Z"
                            />
                        </svg>

                    </div>


                    <div>

                        <h1 class="font-bold text-lg">
                            LegalTrack
                        </h1>

                        <p class="text-xs text-slate-400">
                            Contract Management
                        </p>

                    </div>

                </div>

            </div>


            {{-- NAVIGATION --}}
            <nav class="flex-1 px-4 py-6 space-y-2">


                {{-- DASHBOARD --}}
                <a
                    href="{{ route('dashboard') }}"
                    onclick="showPage('dashboard'); return false;"
                    class="nav-item flex items-center gap-3
                           px-4 py-3 rounded-xl
                           text-slate-300
                           hover:bg-slate-800
                           hover:text-white
                           transition"
                    data-page="dashboard"
                >

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 12l9-9 9 9M5 10v10h14V10"
                        />
                    </svg>

                    <span>
                        Dashboard
                    </span>

                </a>


                {{-- TAMBAH KONTRAK --}}
                <a
                    href="{{ route('dashboard') }}#tambah"
                    onclick="showPage('tambah'); return false;"
                    class="nav-item flex items-center gap-3
                           px-4 py-3 rounded-xl
                           text-slate-300
                           hover:bg-slate-800
                           hover:text-white
                           transition"
                    data-page="tambah"
                >

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 4v16m8-8H4"
                        />
                    </svg>

                    <span>
                        Tambah Kontrak
                    </span>

                </a>


                {{-- DAFTAR KONTRAK --}}
                <a
                    href="{{ route('dashboard') }}#daftar"
                    onclick="showPage('daftar'); return false;"
                    class="nav-item flex items-center gap-3
                           px-4 py-3 rounded-xl
                           text-slate-300
                           hover:bg-slate-800
                           hover:text-white
                           transition"
                    data-page="daftar"
                >

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"
                        />
                    </svg>

                    <span>
                        Daftar Kontrak
                    </span>

                </a>


                {{-- ================================================= --}}
                {{-- PENGATURAN --}}
                {{-- PENTING: TIDAK LAGI KE ROUTE SETTINGS --}}
                {{-- ================================================= --}}

                <a
                    href="#pengaturan"
                    onclick="showPage('pengaturan'); return false;"
                    class="nav-item flex items-center gap-3
                           px-4 py-3 rounded-xl
                           text-slate-300
                           hover:bg-slate-800
                           hover:text-white
                           transition"
                    data-page="pengaturan"
                >

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10.325 4.317a1.724 1.724 0 0 1 3.35 0 1.724 1.724 0 0 0 2.573 1.066 1.724 1.724 0 0 1 2.898 1.674 1.724 1.724 0 0 0 1.066 2.573 1.724 1.724 0 0 1 0 3.35 1.724 1.724 0 0 0-1.066 2.573 1.724 1.724 0 0 1-2.898 1.674 1.724 1.724 0 0 0-2.573 1.066 1.724 1.724 0 0 1-3.35 0 1.724 1.724 0 0 0-2.573-1.066 1.724 1.724 0 0 1-2.898-1.674 1.724 1.724 0 0 0-1.066-2.573 1.724 1.724 0 0 1 0-3.35 1.724 1.724 0 0 0 1.066-2.573 1.724 1.724 0 0 1 2.898-1.674 1.724 1.724 0 0 0 2.573-1.066Z"
                        />

                        <circle
                            cx="12"
                            cy="12"
                            r="3"
                            stroke-width="2"
                        />

                    </svg>

                    <span>
                        Pengaturan
                    </span>

                </a>

            </nav>


            {{-- USER --}}
            <div class="p-4 border-t border-slate-700">

                <div class="flex items-center gap-3 px-3 py-3">

                    <div
                        class="w-10 h-10 rounded-full
                               bg-blue-600
                               flex items-center justify-center
                               font-bold"
                    >
                        A
                    </div>

                    <div class="flex-1 min-w-0">

                        <p class="text-sm font-semibold truncate">
                            Administrator
                        </p>

                        <p class="text-xs text-slate-400 truncate">
                            Admin LegalTrack
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </aside>



    {{-- MOBILE OVERLAY --}}
    <div
        id="sidebarOverlay"
        class="fixed inset-0 z-40
               bg-black/50 hidden lg:hidden"
        onclick="toggleSidebar()"
    ></div>



    {{-- ========================================================= --}}
    {{-- MAIN --}}
    {{-- ========================================================= --}}

    <main class="flex-1 lg:ml-64 min-w-0">


        {{-- TOPBAR --}}
        <header
            class="sticky top-0 z-30
                   bg-white border-b border-slate-200"
        >

            <div
                class="px-4 sm:px-6 lg:px-8
                       h-16
                       flex items-center justify-between"
            >

                <div class="flex items-center gap-3">

                    <button
                        onclick="toggleSidebar()"
                        class="lg:hidden p-2 rounded-lg
                               hover:bg-slate-100"
                    >

                        <svg
                            class="w-6 h-6"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                        </svg>

                    </button>


                    <div>

                        <h2
                            id="pageTitle"
                            class="font-semibold text-slate-800"
                        >
                            Dashboard
                        </h2>

                        <p class="text-xs text-slate-400">
                            Sistem Manajemen Kontrak Terintegrasi
                        </p>

                    </div>

                </div>


                <div class="hidden sm:block text-right">

                    <p class="text-sm font-medium text-slate-700">
                        {{ now()->translatedFormat('l, d F Y') }}
                    </p>

                    <p class="text-xs text-slate-400">
                        Legal Department
                    </p>

                </div>

            </div>

        </header>



        {{-- CONTENT --}}
        <div class="p-4 sm:p-6 lg:p-8">


            {{-- SUCCESS --}}
            @if(session('success'))

                <div
                    id="successAlert"
                    class="mb-6 flex items-center gap-3
                           bg-green-50 border border-green-200
                           text-green-700
                           px-4 py-3 rounded-xl"
                >

                    <svg
                        class="w-5 h-5 flex-shrink-0"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="m5 13 4 4L19 7"
                        />
                    </svg>

                    <span class="text-sm font-medium">
                        {{ session('success') }}
                    </span>

                </div>

            @endif


            {{-- VALIDATION --}}
            @if($errors->any())

                <div
                    class="mb-6 bg-red-50
                           border border-red-200
                           text-red-700
                           px-4 py-4 rounded-xl"
                >

                    <p class="font-semibold mb-2">
                        Terdapat kesalahan:
                    </p>

                    <ul class="list-disc ml-5 text-sm space-y-1">

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif



            {{-- ================================================= --}}
            {{-- PAGE DASHBOARD --}}
            {{-- ================================================= --}}

            <section
                id="page-dashboard"
                class="page-section"
            >

                <div class="mb-6">

                    <h1 class="text-2xl sm:text-3xl font-bold text-slate-800">
                        Dashboard
                    </h1>

                    <p class="text-slate-500 mt-1">
                        Ringkasan kondisi kontrak LegalTrack.
                    </p>

                </div>


                <div
                    class="grid grid-cols-1 sm:grid-cols-2
                           xl:grid-cols-4 gap-5 mb-6"
                >

                    {{-- TOTAL --}}
                    <div
                        class="bg-white rounded-2xl
                               border border-slate-200
                               shadow-sm p-5"
                    >

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-slate-500">
                                    Total Kontrak
                                </p>

                                <p
                                    class="text-3xl font-bold
                                           text-slate-800 mt-2"
                                >
                                    {{ $totalContracts }}
                                </p>

                            </div>

                            <div
                                class="w-12 h-12 rounded-xl
                                       bg-blue-50 text-blue-600
                                       flex items-center justify-center"
                            >

                                <svg
                                    class="w-6 h-6"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h7l5 5v11a2 2 0 0 1-2 2Z"
                                    />
                                </svg>

                            </div>

                        </div>

                    </div>


                    {{-- ACTIVE --}}
                    <div
                        class="bg-white rounded-2xl
                               border border-slate-200
                               shadow-sm p-5"
                    >

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-slate-500">
                                    Kontrak Aktif
                                </p>

                                <p
                                    class="text-3xl font-bold
                                           text-green-600 mt-2"
                                >
                                    {{ $activeContracts }}
                                </p>

                            </div>

                            <div
                                class="w-12 h-12 rounded-xl
                                       bg-green-50 text-green-600
                                       flex items-center justify-center"
                            >

                                <svg
                                    class="w-6 h-6"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m5 13 4 4L19 7"
                                    />
                                </svg>

                            </div>

                        </div>

                    </div>


                    {{-- EXPIRING --}}
                    <div
                        class="bg-white rounded-2xl
                               border border-slate-200
                               shadow-sm p-5"
                    >

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-slate-500">
                                    Berakhir Bulan Ini
                                </p>

                                <p
                                    class="text-3xl font-bold
                                           text-orange-600 mt-2"
                                >
                                    {{ $expiringThisMonth }}
                                </p>

                            </div>

                            <div
                                class="w-12 h-12 rounded-xl
                                       bg-orange-50 text-orange-600
                                       flex items-center justify-center"
                            >

                                <svg
                                    class="w-6 h-6"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                                    />
                                </svg>

                            </div>

                        </div>

                    </div>


                    {{-- EXPIRED --}}
                    <div
                        class="bg-white rounded-2xl
                               border border-slate-200
                               shadow-sm p-5"
                    >

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-slate-500">
                                    Kedaluwarsa
                                </p>

                                <p
                                    class="text-3xl font-bold
                                           text-red-600 mt-2"
                                >
                                    {{ $expiredContracts }}
                                </p>

                            </div>

                            <div
                                class="w-12 h-12 rounded-xl
                                       bg-red-50 text-red-600
                                       flex items-center justify-center"
                            >

                                <svg
                                    class="w-6 h-6"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 9v4m0 4h.01M10.29 3.86 2.82 17a2 2 0 0 0 1.74 3h14.88a2 2 0 0 0 1.74-3L13.71 3.86a2 2 0 0 0-3.42 0Z"
                                    />
                                </svg>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- KONTRAK TERBARU --}}
                <div
                    class="bg-white rounded-2xl
                           border border-slate-200
                           shadow-sm"
                >

                    <div
                        class="px-6 py-5
                               border-b border-slate-200
                               flex flex-col sm:flex-row
                               sm:items-center
                               sm:justify-between gap-3"
                    >

                        <div>

                            <h3 class="font-semibold text-slate-800">
                                Kontrak Terbaru
                            </h3>

                            <p class="text-sm text-slate-500 mt-1">
                                Data kontrak yang baru ditambahkan.
                            </p>

                        </div>

                        <a
                            href="#daftar"
                            onclick="showPage('daftar'); return false;"
                            class="text-sm font-medium text-blue-600
                                   hover:text-blue-700"
                        >
                            Lihat Semua →
                        </a>

                    </div>


                    <div class="overflow-x-auto">

                        <table class="w-full">

                            <thead class="bg-slate-50">

                                <tr>

                                    <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase">
                                        Kode
                                    </th>

                                    <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase">
                                        Judul Kontrak
                                    </th>

                                    <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase">
                                        Kategori
                                    </th>

                                    <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase">
                                        Berakhir
                                    </th>

                                    <th class="px-6 py-4 text-left text-xs font-semibold text-slate-500 uppercase">
                                        Status
                                    </th>

                                </tr>

                            </thead>


                            <tbody class="divide-y divide-slate-100">

                                @forelse($contracts->take(5) as $contract)

                                    <tr class="hover:bg-slate-50">

                                        <td class="px-6 py-4">

                                            <span
                                                class="font-mono text-xs
                                                       font-semibold text-blue-600"
                                            >
                                                {{ $contract->kode }}
                                            </span>

                                        </td>


                                        <td class="px-6 py-4">

                                            <div class="font-medium text-slate-800">
                                                {{ $contract->judul }}
                                            </div>

                                            <div class="text-xs text-slate-400 mt-1">
                                                {{ $contract->pihak }}
                                            </div>

                                        </td>


                                        <td class="px-6 py-4">

                                            <span
                                                class="inline-flex px-3 py-1
                                                       rounded-full bg-blue-50
                                                       text-blue-700
                                                       text-xs font-medium"
                                            >
                                                {{ $contract->kategori }}
                                            </span>

                                        </td>


                                        <td class="px-6 py-4">

                                            <span class="text-sm text-slate-700">
                                                {{ \Carbon\Carbon::parse($contract->tanggal_berakhir)->format('d/m/Y') }}
                                            </span>

                                        </td>


                                        <td class="px-6 py-4">

                                            <span
                                                class="inline-flex px-3 py-1
                                                       rounded-full bg-slate-100
                                                       text-slate-700
                                                       text-xs font-medium"
                                            >
                                                {{ $contract->status }}
                                            </span>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td
                                            colspan="5"
                                            class="px-6 py-12 text-center
                                                   text-slate-400"
                                        >
                                            Belum ada data kontrak.
                                        </td>

                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>

            </section>



            {{-- ================================================= --}}
            {{-- PAGE TAMBAH KONTRAK --}}
            {{-- ================================================= --}}

            <section
                id="page-tambah"
                class="page-section hidden"
            >

                <div class="mb-6">

                    <h1 class="text-2xl sm:text-3xl font-bold text-slate-800">
                        Tambah Kontrak
                    </h1>

                    <p class="text-slate-500 mt-1">
                        Tambahkan data kontrak baru ke LegalTrack.
                    </p>

                </div>


                <form
                    action="{{ route('contracts.store') }}"
                    method="POST"
                    class="bg-white rounded-2xl
                           border border-slate-200
                           shadow-sm"
                >

                    @csrf


                    <div class="p-6 sm:p-8">

                        <div class="mb-8">

                            <h3 class="text-lg font-semibold text-slate-800">
                                Informasi Kontrak
                            </h3>

                            <p class="text-sm text-slate-500 mt-1">
                                Masukkan informasi utama kontrak.
                            </p>

                        </div>


                        <div
                            class="grid grid-cols-1 md:grid-cols-2
                                   gap-5"
                        >

                            {{-- JUDUL --}}
                            <div class="md:col-span-2">

                                <label class="block text-sm font-medium text-slate-700 mb-2">
                                    Judul Kontrak
                                    <span class="text-red-500">*</span>
                                </label>

                                <input
                                    type="text"
                                    name="judul"
                                    value="{{ old('judul') }}"
                                    required
                                    placeholder="Contoh: Kontrak Kerja Karyawan"
                                    class="w-full px-4 py-3 border border-slate-300
                                           rounded-xl focus:outline-none
                                           focus:ring-2 focus:ring-blue-500"
                                >

                            </div>


                            {{-- KATEGORI --}}
                            <div>

                                <label class="block text-sm font-medium text-slate-700 mb-2">
                                    Kategori
                                    <span class="text-red-500">*</span>
                                </label>

                                <select
                                    name="kategori"
                                    required
                                    class="w-full px-4 py-3 border border-slate-300
                                           rounded-xl bg-white focus:outline-none
                                           focus:ring-2 focus:ring-blue-500"
                                >

                                    <option value="">Pilih Kategori</option>
                                    <option value="Karyawan">Karyawan</option>
                                    <option value="Vendor">Vendor</option>
                                    <option value="Sub-kontraktor">Sub-kontraktor</option>
                                    <option value="Klien">Klien</option>

                                </select>

                            </div>


                            {{-- PIHAK --}}
                            <div>

                                <label class="block text-sm font-medium text-slate-700 mb-2">
                                    Pihak Terkait
                                    <span class="text-red-500">*</span>
                                </label>

                                <input
                                    type="text"
                                    name="pihak"
                                    value="{{ old('pihak') }}"
                                    required
                                    placeholder="Nama pihak terkait"
                                    class="w-full px-4 py-3 border border-slate-300
                                           rounded-xl focus:outline-none
                                           focus:ring-2 focus:ring-blue-500"
                                >

                            </div>


                            {{-- PJ --}}
                            <div>

                                <label class="block text-sm font-medium text-slate-700 mb-2">
                                    Penanggung Jawab
                                    <span class="text-red-500">*</span>
                                </label>

                                <input
                                    type="text"
                                    name="penanggung_jawab"
                                    value="{{ old('penanggung_jawab') }}"
                                    required
                                    placeholder="Nama penanggung jawab"
                                    class="w-full px-4 py-3 border border-slate-300
                                           rounded-xl focus:outline-none
                                           focus:ring-2 focus:ring-blue-500"
                                >

                            </div>


                            {{-- NILAI --}}
                            <div>

                                <label class="block text-sm font-medium text-slate-700 mb-2">
                                    Nilai Kontrak
                                    <span class="text-red-500">*</span>
                                </label>

                                <div class="relative">

                                    <span
                                        class="absolute left-4 top-1/2
                                               -translate-y-1/2
                                               text-slate-500 text-sm"
                                    >
                                        Rp
                                    </span>

                                    <input
                                        type="number"
                                        name="nilai_kontrak"
                                        value="{{ old('nilai_kontrak', 0) }}"
                                        min="0"
                                        required
                                        class="w-full pl-11 pr-4 py-3
                                               border border-slate-300
                                               rounded-xl focus:outline-none
                                               focus:ring-2 focus:ring-blue-500"
                                    >

                                </div>

                            </div>


                            {{-- MULAI --}}
                            <div>

                                <label class="block text-sm font-medium text-slate-700 mb-2">
                                    Tanggal Mulai
                                    <span class="text-red-500">*</span>
                                </label>

                                <input
                                    type="date"
                                    name="tanggal_mulai"
                                    value="{{ old('tanggal_mulai') }}"
                                    required
                                    class="w-full px-4 py-3 border border-slate-300
                                           rounded-xl focus:outline-none
                                           focus:ring-2 focus:ring-blue-500"
                                >

                            </div>


                            {{-- BERAKHIR --}}
                            <div>

                                <label class="block text-sm font-medium text-slate-700 mb-2">
                                    Tanggal Berakhir
                                    <span class="text-red-500">*</span>
                                </label>

                                <input
                                    type="date"
                                    name="tanggal_berakhir"
                                    value="{{ old('tanggal_berakhir') }}"
                                    required
                                    class="w-full px-4 py-3 border border-slate-300
                                           rounded-xl focus:outline-none
                                           focus:ring-2 focus:ring-blue-500"
                                >

                            </div>


                            {{-- STATUS --}}
                            <div>

                                <label class="block text-sm font-medium text-slate-700 mb-2">
                                    Status
                                    <span class="text-red-500">*</span>
                                </label>

                                <select
                                    name="status"
                                    required
                                    class="w-full px-4 py-3 border border-slate-300
                                           rounded-xl bg-white focus:outline-none
                                           focus:ring-2 focus:ring-blue-500"
                                >

                                    <option value="">Pilih Status</option>
                                    <option value="Draft">Draft</option>
                                    <option value="Review Internal">Review Internal</option>
                                    <option value="Review Eksternal">Review Eksternal</option>
                                    <option value="Revisi">Revisi</option>
                                    <option value="Menunggu Tanda Tangan">
                                        Menunggu Tanda Tangan
                                    </option>
                                    <option value="Selesai Ditandatangani">
                                        Selesai Ditandatangani
                                    </option>

                                </select>

                            </div>


                            {{-- KETERANGAN --}}
                            <div class="md:col-span-2">

                                <label class="block text-sm font-medium text-slate-700 mb-2">
                                    Keterangan
                                </label>

                                <textarea
                                    name="keterangan"
                                    rows="4"
                                    placeholder="Tambahkan keterangan jika diperlukan..."
                                    class="w-full px-4 py-3 border border-slate-300
                                           rounded-xl focus:outline-none
                                           focus:ring-2 focus:ring-blue-500"
                                >{{ old('keterangan') }}</textarea>

                            </div>

                        </div>

                    </div>


                    <div
                        class="px-6 sm:px-8 py-5 bg-slate-50
                               border-t border-slate-200
                               flex flex-col sm:flex-row
                               justify-end gap-3"
                    >

                        <button
                            type="button"
                            onclick="showPage('dashboard')"
                            class="px-5 py-3 rounded-xl
                                   border border-slate-300
                                   text-slate-700 hover:bg-white"
                        >
                            Batal
                        </button>

                        <button
                            type="submit"
                            class="px-6 py-3 rounded-xl
                                   bg-blue-600 text-white
                                   font-medium hover:bg-blue-700"
                        >
                            Simpan Kontrak
                        </button>

                    </div>

                </form>

            </section>



            {{-- ================================================= --}}
            {{-- PAGE DAFTAR KONTRAK --}}
            {{-- ================================================= --}}

            <section
                id="page-daftar"
                class="page-section hidden"
            >

                <div class="mb-6">

                    <h1 class="text-2xl sm:text-3xl font-bold text-slate-800">
                        Daftar Kontrak
                    </h1>

                    <p class="text-slate-500 mt-1">
                        Kelola, cari, dan pantau seluruh kontrak LegalTrack.
                    </p>

                </div>


                {{-- FILTER --}}
                <div
                    class="bg-white rounded-2xl border border-slate-200
                           shadow-sm p-5 mb-6"
                >

                    <div
                        class="grid grid-cols-1 md:grid-cols-2
                               xl:grid-cols-5 gap-4"
                    >

                        <div class="xl:col-span-2">

                            <label class="block text-sm font-medium text-slate-700 mb-2">
                                Cari Kontrak
                            </label>

                            <input
                                id="contractSearch"
                                type="text"
                                placeholder="Kode, judul, atau pihak..."
                                class="w-full px-4 py-3 border border-slate-300
                                       rounded-xl focus:outline-none
                                       focus:ring-2 focus:ring-blue-500"
                            >

                        </div>


                        <div>

                            <label class="block text-sm font-medium text-slate-700 mb-2">
                                Kategori
                            </label>

                            <select
                                id="filterKategori"
                                class="w-full px-4 py-3 border border-slate-300
                                       rounded-xl bg-white"
                            >

                                <option value="">
                                    Semua Kategori
                                </option>

                                <option value="Karyawan">Karyawan</option>
                                <option value="Vendor">Vendor</option>
                                <option value="Sub-kontraktor">Sub-kontraktor</option>
                                <option value="Klien">Klien</option>

                            </select>

                        </div>


                        <div>

                            <label class="block text-sm font-medium text-slate-700 mb-2">
                                Status
                            </label>

                            <select
                                id="filterStatus"
                                class="w-full px-4 py-3 border border-slate-300
                                       rounded-xl bg-white"
                            >

                                <option value="">
                                    Semua Status
                                </option>

                                <option value="Draft">Draft</option>
                                <option value="Review Internal">Review Internal</option>
                                <option value="Review Eksternal">Review Eksternal</option>
                                <option value="Revisi">Revisi</option>
                                <option value="Menunggu Tanda Tangan">
                                    Menunggu Tanda Tangan
                                </option>
                                <option value="Selesai Ditandatangani">
                                    Selesai Ditandatangani
                                </option>

                            </select>

                        </div>


                        <div>

                            <label class="block text-sm font-medium text-slate-700 mb-2">
                                Kondisi
                            </label>

                            <select
                                id="filterReminder"
                                class="w-full px-4 py-3 border border-slate-300
                                       rounded-xl bg-white"
                            >

                                <option value="">
                                    Semua Kondisi
                                </option>

                                <option value="expired">
                                    🔴 Kedaluwarsa
                                </option>

                                <option value="critical">
                                    🟠 Peringatan Kritis
                                </option>

                                <option value="near">
                                    🟡 Mendekati Habis
                                </option>

                                <option value="safe">
                                    🟢 Aman
                                </option>

                            </select>

                        </div>

                    </div>


                    <div class="mt-4 flex justify-end">

                        <button
                            type="button"
                            id="resetContractFilter"
                            class="px-5 py-2.5 rounded-xl
                                   border border-slate-300
                                   text-sm font-medium
                                   text-slate-700 hover:bg-slate-50"
                        >
                            Reset Filter
                        </button>

                    </div>

                </div>


                {{-- TABLE --}}
                <div
                    class="bg-white rounded-2xl border border-slate-200
                           shadow-sm overflow-hidden"
                >

                    <div
                        class="px-6 py-5 border-b border-slate-200
                               flex flex-col sm:flex-row
                               sm:items-center sm:justify-between gap-3"
                    >

                        <div>

                            <h3 class="font-semibold text-slate-800">
                                Data Kontrak
                            </h3>

                            <p class="text-sm text-slate-500 mt-1">

                                Menampilkan

                                <span
                                    id="contractResultCount"
                                    class="font-semibold text-slate-700"
                                >
                                    {{ $contracts->count() }}
                                </span>

                                kontrak

                            </p>

                        </div>


                        <button
                            type="button"
                            onclick="showPage('tambah')"
                            class="inline-flex items-center justify-center
                                   gap-2 px-4 py-2.5 rounded-xl
                                   bg-blue-600 text-white text-sm
                                   font-medium hover:bg-blue-700"
                        >
                            + Tambah Kontrak
                        </button>

                    </div>


                    <div class="overflow-x-auto">

                        <table class="w-full min-w-[1200px]">

                            <thead class="bg-slate-50">

                                <tr>

                                    <th class="px-5 py-4 text-left text-xs font-semibold text-slate-500 uppercase">
                                        Kode
                                    </th>

                                    <th class="px-5 py-4 text-left text-xs font-semibold text-slate-500 uppercase">
                                        Kontrak
                                    </th>

                                    <th class="px-5 py-4 text-left text-xs font-semibold text-slate-500 uppercase">
                                        Kategori
                                    </th>

                                    <th class="px-5 py-4 text-left text-xs font-semibold text-slate-500 uppercase">
                                        Pihak Terkait
                                    </th>

                                    <th class="px-5 py-4 text-left text-xs font-semibold text-slate-500 uppercase">
                                        Berakhir
                                    </th>

                                    <th class="px-5 py-4 text-center text-xs font-semibold text-slate-500 uppercase">
                                        Sisa Hari
                                    </th>

                                    <th class="px-5 py-4 text-center text-xs font-semibold text-slate-500 uppercase">
                                        Reminder
                                    </th>

                                    <th class="px-5 py-4 text-left text-xs font-semibold text-slate-500 uppercase">
                                        Status
                                    </th>

                                    <th class="px-5 py-4 text-center text-xs font-semibold text-slate-500 uppercase">
                                        Aksi
                                    </th>

                                </tr>

                            </thead>


                            <tbody
                                id="contractTableBody"
                                class="divide-y divide-slate-100"
                            >

                                @forelse($contracts as $contract)

                                    @php

                                        $daysRemaining =
                                            \Carbon\Carbon::today()->diffInDays(
                                                \Carbon\Carbon::parse(
                                                    $contract->tanggal_berakhir
                                                ),
                                                false
                                            );

                                        if ($daysRemaining < 0) {

                                            $reminderType = 'expired';
                                            $reminderLabel = 'KEDALUWARSA';
                                            $reminderClass =
                                                'bg-red-100 text-red-700 border-red-200';

                                        } elseif ($daysRemaining <= $criticalDays) {

                                            $reminderType = 'critical';
                                            $reminderLabel = 'PERINGATAN KRITIS';
                                            $reminderClass =
                                                'bg-orange-100 text-orange-700 border-orange-200';

                                        } elseif ($daysRemaining <= $nearDays) {

                                            $reminderType = 'near';
                                            $reminderLabel = 'MENDEKATI HABIS';
                                            $reminderClass =
                                                'bg-yellow-100 text-yellow-700 border-yellow-200';

                                        } else {

                                            $reminderType = 'safe';
                                            $reminderLabel = 'AMAN';
                                            $reminderClass =
                                                'bg-green-100 text-green-700 border-green-200';

                                        }


                                        $statusClass = match($contract->status) {

                                            'Selesai Ditandatangani'
                                                => 'bg-green-100 text-green-700',

                                            'Menunggu Tanda Tangan'
                                                => 'bg-blue-100 text-blue-700',

                                            'Review Internal',
                                            'Review Eksternal'
                                                => 'bg-purple-100 text-purple-700',

                                            'Revisi'
                                                => 'bg-orange-100 text-orange-700',

                                            default
                                                => 'bg-slate-100 text-slate-700',

                                        };

                                    @endphp


                                    <tr
                                        class="contract-row hover:bg-slate-50"
                                        data-search="{{ strtolower($contract->kode . ' ' . $contract->judul . ' ' . $contract->pihak) }}"
                                        data-kategori="{{ $contract->kategori }}"
                                        data-status="{{ $contract->status }}"
                                        data-reminder="{{ $reminderType }}"
                                    >

                                        <td class="px-5 py-4">

                                            <span
                                                class="font-mono text-xs
                                                       font-semibold text-blue-600"
                                            >
                                                {{ $contract->kode }}
                                            </span>

                                        </td>


                                        <td class="px-5 py-4">

                                            <div class="max-w-xs">

                                                <div
                                                    class="font-semibold
                                                           text-slate-800 truncate"
                                                >
                                                    {{ $contract->judul }}
                                                </div>

                                                <div class="text-xs text-slate-500 mt-1">
                                                    Rp {{ number_format($contract->nilai_kontrak, 0, ',', '.') }}
                                                </div>

                                            </div>

                                        </td>


                                        <td class="px-5 py-4">

                                            <span
                                                class="inline-flex px-3 py-1
                                                       rounded-full bg-blue-50
                                                       text-blue-700 text-xs font-medium"
                                            >
                                                {{ $contract->kategori }}
                                            </span>

                                        </td>


                                        <td class="px-5 py-4">

                                            <div class="text-sm text-slate-700">
                                                {{ $contract->pihak }}
                                            </div>

                                            @if($contract->penanggung_jawab)

                                                <div class="text-xs text-slate-400 mt-1">
                                                    PJ: {{ $contract->penanggung_jawab }}
                                                </div>

                                            @endif

                                        </td>


                                        <td class="px-5 py-4">

                                            <span class="text-sm font-medium text-slate-700">

                                                {{ \Carbon\Carbon::parse($contract->tanggal_berakhir)->format('d/m/Y') }}

                                            </span>

                                        </td>


                                        <td class="px-5 py-4 text-center">

                                            @if($daysRemaining < 0)

                                                <div class="font-bold text-red-600">
                                                    {{ abs($daysRemaining) }}
                                                </div>

                                                <div class="text-[11px] text-red-500">
                                                    hari lewat
                                                </div>

                                            @elseif($daysRemaining == 0)

                                                <div class="font-bold text-orange-600">
                                                    Hari ini
                                                </div>

                                            @else

                                                <div class="font-bold text-slate-700">
                                                    {{ $daysRemaining }}
                                                </div>

                                                <div class="text-[11px] text-slate-400">
                                                    hari lagi
                                                </div>

                                            @endif

                                        </td>


                                        <td class="px-5 py-4 text-center">

                                            <span
                                                class="inline-flex items-center
                                                       justify-center px-3 py-1.5
                                                       rounded-full border
                                                       text-[11px] font-bold
                                                       whitespace-nowrap
                                                       {{ $reminderClass }}"
                                            >
                                                {{ $reminderLabel }}
                                            </span>

                                        </td>


                                        <td class="px-5 py-4">

                                            <span
                                                class="inline-flex px-3 py-1
                                                       rounded-full text-xs
                                                       font-medium whitespace-nowrap
                                                       {{ $statusClass }}"
                                            >
                                                {{ $contract->status }}
                                            </span>

                                        </td>


                                        <td class="px-5 py-4">

                                            <div
                                                class="flex items-center
                                                       justify-center gap-2"
                                            >

                                                <a
                                                    href="{{ route('contracts.show', $contract) }}"
                                                    class="p-2 rounded-lg text-blue-600
                                                           hover:bg-blue-50"
                                                    title="Lihat Detail"
                                                >
                                                    👁
                                                </a>


                                                <a
                                                    href="{{ route('contracts.edit', $contract) }}"
                                                    class="p-2 rounded-lg text-amber-600
                                                           hover:bg-amber-50"
                                                    title="Edit"
                                                >
                                                    ✏️
                                                </a>


                                                <form
                                                    action="{{ route('contracts.destroy', $contract) }}"
                                                    method="POST"
                                                    class="delete-contract-form"
                                                >

                                                    @csrf
                                                    @method('DELETE')

                                                    <button
                                                        type="submit"
                                                        class="p-2 rounded-lg
                                                               text-red-600
                                                               hover:bg-red-50"
                                                        title="Hapus"
                                                    >
                                                        🗑️
                                                    </button>

                                                </form>

                                            </div>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td
                                            colspan="9"
                                            class="px-6 py-16 text-center
                                                   text-slate-400"
                                        >
                                            Belum ada kontrak.
                                        </td>

                                    </tr>

                                @endforelse


                                <tr
                                    id="filterEmptyRow"
                                    class="hidden"
                                >

                                    <td
                                        colspan="9"
                                        class="px-6 py-16 text-center"
                                    >

                                        <div class="text-slate-400">

                                            <div class="text-4xl mb-3">
                                                🔍
                                            </div>

                                            <h4 class="font-semibold text-slate-700">
                                                Kontrak tidak ditemukan
                                            </h4>

                                            <p class="text-sm mt-1">
                                                Coba ubah kata pencarian atau filter.
                                            </p>

                                        </div>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </section>



            {{-- ================================================= --}}
            {{-- PAGE PENGATURAN --}}
            {{-- ================================================= --}}

            <section
                id="page-pengaturan"
                class="page-section hidden"
            >

                {{-- HEADER --}}
                <div class="mb-6">

                    <h1 class="text-2xl sm:text-3xl font-bold text-slate-800">
                        Pengaturan
                    </h1>

                    <p class="text-slate-500 mt-1">
                        Kelola akun, tampilan, keamanan, notifikasi,
                        dan preferensi LegalTrack.
                    </p>

                </div>


                {{-- ================================================= --}}
                {{-- AKUN ADMINISTRATOR --}}
                {{-- ================================================= --}}

                <div
                    class="bg-white rounded-2xl
                           border border-slate-200
                           shadow-sm mb-6"
                >

                    <div class="px-6 py-5 border-b border-slate-200">

                        <h3 class="font-semibold text-slate-800">
                            Akun Administrator
                        </h3>

                        <p class="text-sm text-slate-500 mt-1">
                            Informasi akun administrator LegalTrack.
                        </p>

                    </div>


                    <div class="p-6">

                        <form
                            action="{{ route('settings.profile.update') }}"
                            method="POST"
                        >

                            @csrf
                            @method('PUT')

                            <div
                                class="grid grid-cols-1 md:grid-cols-2
                                       gap-5"
                            >

                                <div>

                                    <label
                                        class="block text-sm font-medium
                                               text-slate-700 mb-2"
                                    >
                                        Nama Administrator
                                    </label>

                                    <input
                                        type="text"
                                        name="name"
                                        value="{{ auth()->user()->name ?? 'Administrator' }}"
                                        class="w-full px-4 py-3
                                               border border-slate-300
                                               rounded-xl
                                               focus:outline-none
                                               focus:ring-2
                                               focus:ring-blue-500"
                                    >

                                </div>


                                <div>

                                    <label
                                        class="block text-sm font-medium
                                               text-slate-700 mb-2"
                                    >
                                        Email
                                    </label>

                                    <input
                                        type="email"
                                        name="email"
                                        value="{{ auth()->user()->email ?? '' }}"
                                        class="w-full px-4 py-3
                                               border border-slate-300
                                               rounded-xl
                                               focus:outline-none
                                               focus:ring-2
                                               focus:ring-blue-500"
                                    >

                                </div>

                            </div>


                            <div
                                class="mt-5 flex flex-col sm:flex-row
                                       gap-3"
                            >

                                <button
                                    type="submit"
                                    class="px-5 py-3 rounded-xl
                                           bg-blue-600 text-white
                                           font-medium hover:bg-blue-700"
                                >
                                    Simpan Perubahan
                                </button>


                                <button
                                    type="button"
                                    onclick="openPasswordModal()"
                                    class="px-5 py-3 rounded-xl
                                           border border-slate-300
                                           text-slate-700
                                           hover:bg-slate-50"
                                >
                                    Ubah Kata Sandi
                                </button>


                                <button
                                    type="button"
                                    onclick="showForgotPasswordInfo()"
                                    class="px-5 py-3 rounded-xl
                                           border border-slate-300
                                           text-slate-700
                                           hover:bg-slate-50"
                                >
                                    Lupa Kata Sandi
                                </button>

                            </div>

                        </form>

                    </div>

                </div>



                {{-- ================================================= --}}
                {{-- TAMPILAN + KEAMANAN --}}
                {{-- ================================================= --}}

                <div
                    class="grid grid-cols-1 lg:grid-cols-2
                           gap-6 mb-6"
                >


                    {{-- TAMPILAN --}}
                    <div
                        class="bg-white rounded-2xl
                               border border-slate-200
                               shadow-sm"
                    >

                        <div class="px-6 py-5 border-b border-slate-200">

                            <h3 class="font-semibold text-slate-800">
                                Tampilan
                            </h3>

                            <p class="text-sm text-slate-500 mt-1">
                                Atur tampilan aplikasi sesuai kebutuhan.
                            </p>

                        </div>


                        <div class="p-6 space-y-6">

                            <div>

                                <label
                                    class="block text-sm font-medium
                                           text-slate-700 mb-2"
                                >
                                    Tema
                                </label>

                                <select
                                    id="themeSelect"
                                    class="w-full px-4 py-3
                                           border border-slate-300
                                           rounded-xl bg-white"
                                >

                                    <option value="light">
                                        Terang
                                    </option>

                                    <option value="dark">
                                        Gelap
                                    </option>

                                </select>

                                <p class="text-xs text-slate-400 mt-2">
                                    Pilih tema tampilan LegalTrack.
                                </p>

                            </div>


                            <div>

                                <label
                                    class="block text-sm font-medium
                                           text-slate-700 mb-2"
                                >
                                    Ubah Bahasa
                                </label>

                                <select
                                    id="languageSelect"
                                    class="w-full px-4 py-3
                                           border border-slate-300
                                           rounded-xl bg-white"
                                >

                                    <option value="id">
                                        🇮🇩 Indonesia
                                    </option>

                                    <option value="en">
                                        🇬🇧 English
                                    </option>

                                </select>

                                <p class="text-xs text-slate-400 mt-2">
                                    Bahasa yang digunakan pada aplikasi.
                                </p>

                            </div>

                        </div>

                    </div>



                    {{-- KEAMANAN --}}
                    <div
                        class="bg-white rounded-2xl
                               border border-slate-200
                               shadow-sm"
                    >

                        <div class="px-6 py-5 border-b border-slate-200">

                            <h3 class="font-semibold text-slate-800">
                                Keamanan
                            </h3>

                            <p class="text-sm text-slate-500 mt-1">
                                Pengaturan keamanan akun.
                            </p>

                        </div>


                        <div class="p-6 space-y-5">

                            <div
                                class="flex items-center
                                       justify-between gap-4"
                            >

                                <div>

                                    <p class="font-medium text-slate-800">
                                        Login Administrator
                                    </p>

                                    <p class="text-sm text-slate-500 mt-1">
                                        Akun dilindungi dengan autentikasi.
                                    </p>

                                </div>


                                <span
                                    class="px-3 py-1 rounded-full
                                           bg-green-100 text-green-700
                                           text-xs font-semibold"
                                >
                                    Aktif
                                </span>

                            </div>


                            <div
                                class="flex items-center
                                       justify-between gap-4"
                            >

                                <div>

                                    <p class="font-medium text-slate-800">
                                        Password Protection
                                    </p>

                                    <p class="text-sm text-slate-500 mt-1">
                                        Gunakan password yang kuat.
                                    </p>

                                </div>


                                <span
                                    class="px-3 py-1 rounded-full
                                           bg-green-100 text-green-700
                                           text-xs font-semibold"
                                >
                                    Aktif
                                </span>

                            </div>


                            <div class="pt-3 border-t border-slate-200">

                                <button
                                    type="button"
                                    onclick="openPasswordModal()"
                                    class="w-full px-4 py-3
                                           rounded-xl
                                           border border-slate-300
                                           text-slate-700
                                           hover:bg-slate-50"
                                >
                                    Kelola Keamanan Akun
                                </button>

                            </div>

                        </div>

                    </div>

                </div>



                {{-- ================================================= --}}
                {{-- NOTIFIKASI + PREFERENSI --}}
                {{-- ================================================= --}}

                <div
                    class="grid grid-cols-1 lg:grid-cols-2
                           gap-6 mb-6"
                >


                    {{-- NOTIFIKASI --}}
                    <div
                        class="bg-white rounded-2xl
                               border border-slate-200
                               shadow-sm"
                    >

                        <div class="px-6 py-5 border-b border-slate-200">

                            <h3 class="font-semibold text-slate-800">
                                Notifikasi
                            </h3>

                            <p class="text-sm text-slate-500 mt-1">
                                Atur pengingat kontrak.
                            </p>

                        </div>


                        <form
                            action="{{ route('settings.reminder.update') }}"
                            method="POST"
                            class="p-6 space-y-5"
                        >

                            @csrf

                            <div>

                                <label
                                    class="block text-sm font-medium
                                           text-slate-700 mb-2"
                                >
                                    Peringatan Kritis
                                </label>

                                <div class="flex items-center gap-3">

                                    <input
                                        type="number"
                                        name="critical_days"
                                        value="{{ $criticalDays ?? 30 }}"
                                        min="1"
                                        class="w-full px-4 py-3
                                               border border-slate-300
                                               rounded-xl"
                                    >

                                    <span class="text-sm text-slate-500 whitespace-nowrap">
                                        hari
                                    </span>

                                </div>

                                <p class="text-xs text-slate-400 mt-2">
                                    Kontrak akan ditandai sebagai peringatan kritis
                                    ketika memasuki batas ini.
                                </p>

                            </div>


                            <div>

                                <label
                                    class="block text-sm font-medium
                                           text-slate-700 mb-2"
                                >
                                    Mendekati Habis
                                </label>

                                <div class="flex items-center gap-3">

                                    <input
                                        type="number"
                                        name="near_days"
                                        value="{{ $nearDays ?? 60 }}"
                                        min="2"
                                        class="w-full px-4 py-3
                                               border border-slate-300
                                               rounded-xl"
                                    >

                                    <span class="text-sm text-slate-500 whitespace-nowrap">
                                        hari
                                    </span>

                                </div>

                            </div>


                            <button
                                type="submit"
                                class="w-full px-5 py-3
                                       rounded-xl
                                       bg-blue-600
                                       text-white
                                       font-medium
                                       hover:bg-blue-700"
                            >
                                Simpan Pengaturan Notifikasi
                            </button>

                        </form>

                    </div>



                    {{-- PREFERENSI --}}
                    <div
                        class="bg-white rounded-2xl
                               border border-slate-200
                               shadow-sm"
                    >

                        <div class="px-6 py-5 border-b border-slate-200">

                            <h3 class="font-semibold text-slate-800">
                                Preferensi
                            </h3>

                            <p class="text-sm text-slate-500 mt-1">
                                Preferensi penggunaan LegalTrack.
                            </p>

                        </div>


                        <div class="p-6 space-y-5">

                            <div
                                class="flex items-center
                                       justify-between gap-4"
                            >

                                <div>

                                    <p class="font-medium text-slate-800">
                                        Tampilan Kontrak Terbaru
                                    </p>

                                    <p class="text-sm text-slate-500 mt-1">
                                        Tampilkan kontrak terbaru di dashboard.
                                    </p>

                                </div>


                                <label class="relative inline-flex items-center cursor-pointer">

                                    <input
                                        type="checkbox"
                                        id="latestContractToggle"
                                        class="sr-only peer"
                                        checked
                                    >

                                    <div
                                        class="w-11 h-6 bg-slate-300
                                               rounded-full peer
                                               peer-checked:bg-blue-600
                                               after:content-['']
                                               after:absolute
                                               after:top-[2px]
                                               after:left-[2px]
                                               after:bg-white
                                               after:border-gray-300
                                               after:border
                                               after:rounded-full
                                               after:h-5 after:w-5
                                               after:transition-all
                                               peer-checked:after:translate-x-full"
                                    ></div>

                                </label>

                            </div>


                            <div
                                class="flex items-center
                                       justify-between gap-4"
                            >

                                <div>

                                    <p class="font-medium text-slate-800">
                                        Konfirmasi Hapus
                                    </p>

                                    <p class="text-sm text-slate-500 mt-1">
                                        Tampilkan konfirmasi sebelum menghapus.
                                    </p>

                                </div>


                                <label class="relative inline-flex items-center cursor-pointer">

                                    <input
                                        type="checkbox"
                                        id="deleteConfirmToggle"
                                        class="sr-only peer"
                                        checked
                                    >

                                    <div
                                        class="w-11 h-6 bg-slate-300
                                               rounded-full peer
                                               peer-checked:bg-blue-600
                                               after:content-['']
                                               after:absolute
                                               after:top-[2px]
                                               after:left-[2px]
                                               after:bg-white
                                               after:border-gray-300
                                               after:border
                                               after:rounded-full
                                               after:h-5 after:w-5
                                               after:transition-all
                                               peer-checked:after:translate-x-full"
                                    ></div>

                                </label>

                            </div>

                        </div>

                    </div>

                </div>



                {{-- ================================================= --}}
                {{-- TENTANG LEGALTRACK --}}
                {{-- ================================================= --}}

                <div
                    class="bg-white rounded-2xl
                           border border-slate-200
                           shadow-sm"
                >

                    <div class="px-6 py-5 border-b border-slate-200">

                        <h3 class="font-semibold text-slate-800">
                            Tentang LegalTrack
                        </h3>

                    </div>


                    <div class="p-6">

                        <div class="flex flex-col sm:flex-row
                                    items-start sm:items-center
                                    gap-5">

                            <div
                                class="w-16 h-16 rounded-2xl
                                       bg-blue-600
                                       flex items-center justify-center
                                       flex-shrink-0"
                            >

                                <svg
                                    class="w-8 h-8 text-white"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h7l5 5v11a2 2 0 0 1-2 2Z"
                                    />
                                </svg>

                            </div>


                            <div>

                                <h4 class="text-xl font-bold text-slate-800">
                                    LegalTrack
                                </h4>

                                <p class="text-sm text-slate-500 mt-1">
                                    Sistem Manajemen Database Kontrak Terintegrasi
                                </p>

                                <p class="text-xs text-slate-400 mt-2">
                                    Versi 1.0.0
                                </p>

                            </div>

                        </div>


                        <div
                            class="mt-6 pt-5
                                   border-t border-slate-200"
                        >

                            <p class="text-sm text-slate-500 leading-relaxed">
                                LegalTrack membantu Legal Department dalam
                                mengelola data kontrak, memantau masa berlaku,
                                mengatur status kontrak, serta memberikan
                                pengingat terhadap kontrak yang akan berakhir.
                            </p>

                        </div>

                    </div>

                </div>

            </section>

        </div>

    </main>

</div>



{{-- ============================================================= --}}
{{-- PASSWORD MODAL --}}
{{-- ============================================================= --}}

<div
    id="passwordModal"
    class="fixed inset-0 z-[100] hidden
           bg-black/50
           items-center justify-center
           p-4"
>

    <div
        class="bg-white rounded-2xl
               shadow-2xl
               w-full max-w-lg"
    >

        <div
            class="px-6 py-5
                   border-b border-slate-200
                   flex items-center justify-between"
        >

            <div>

                <h3 class="font-semibold text-slate-800">
                    Ubah Kata Sandi
                </h3>

                <p class="text-sm text-slate-500 mt-1">
                    Perbarui kata sandi administrator.
                </p>

            </div>


            <button
                type="button"
                onclick="closePasswordModal()"
                class="text-slate-400 hover:text-slate-700
                       text-2xl"
            >
                ×
            </button>

        </div>


        <form
            action="{{ route('settings.password.update') }}"
            method="POST"
        >

            @csrf
            @method('PUT')

            <div class="p-6 space-y-5">


                <div>

                    <label class="block text-sm font-medium text-slate-700 mb-2">
                        Kata Sandi Lama
                    </label>

                    <input
                        type="password"
                        name="current_password"
                        required
                        class="w-full px-4 py-3
                               border border-slate-300
                               rounded-xl"
                    >

                </div>


                <div>

                    <label class="block text-sm font-medium text-slate-700 mb-2">
                        Kata Sandi Baru
                    </label>

                    <input
                        type="password"
                        name="password"
                        required
                        minlength="8"
                        class="w-full px-4 py-3
                               border border-slate-300
                               rounded-xl"
                    >

                </div>


                <div>

                    <label class="block text-sm font-medium text-slate-700 mb-2">
                        Konfirmasi Kata Sandi
                    </label>

                    <input
                        type="password"
                        name="password_confirmation"
                        required
                        minlength="8"
                        class="w-full px-4 py-3
                               border border-slate-300
                               rounded-xl"
                    >

                </div>

            </div>


            <div
                class="px-6 py-5
                       bg-slate-50
                       border-t border-slate-200
                       flex justify-end gap-3"
            >

                <button
                    type="button"
                    onclick="closePasswordModal()"
                    class="px-5 py-3 rounded-xl
                           border border-slate-300
                           text-slate-700"
                >
                    Batal
                </button>


                <button
                    type="submit"
                    class="px-5 py-3 rounded-xl
                           bg-blue-600 text-white
                           font-medium hover:bg-blue-700"
                >
                    Simpan Kata Sandi
                </button>

            </div>

        </form>

    </div>

</div>



{{-- ============================================================= --}}
{{-- JAVASCRIPT --}}
{{-- ============================================================= --}}

<script>


/* SIDEBAR */

function toggleSidebar()
{

    const sidebar =
        document.getElementById('sidebar');

    const overlay =
        document.getElementById('sidebarOverlay');


    sidebar.classList.toggle('-translate-x-full');

    overlay.classList.toggle('hidden');

}



/* PAGE NAVIGATION */

function showPage(page)
{

    const pages =
        document.querySelectorAll('.page-section');


    pages.forEach(function(section)
    {

        section.classList.add('hidden');

    });


    const target =
        document.getElementById('page-' + page);


    if (target)
    {

        target.classList.remove('hidden');

    }


    /* NAV ACTIVE */

    const navItems =
        document.querySelectorAll('.nav-item');


    navItems.forEach(function(item)
    {

        item.classList.remove(
            'bg-blue-600',
            'text-white'
        );

        item.classList.add(
            'text-slate-300'
        );

    });


    const active =
        document.querySelector(
            '.nav-item[data-page="' + page + '"]'
        );


    if (active)
    {

        active.classList.remove(
            'text-slate-300'
        );

        active.classList.add(
            'bg-blue-600',
            'text-white'
        );

    }


    /* TITLE */

    const pageTitle =
        document.getElementById('pageTitle');


    const titles = {

        dashboard: 'Dashboard',

        tambah: 'Tambah Kontrak',

        daftar: 'Daftar Kontrak',

        pengaturan: 'Pengaturan'

    };


    if (pageTitle)
    {

        pageTitle.textContent =
            titles[page] || 'Dashboard';

    }


    /* MOBILE */

    if (window.innerWidth < 1024)
    {

        document
            .getElementById('sidebar')
            .classList.add('-translate-x-full');

        document
            .getElementById('sidebarOverlay')
            .classList.add('hidden');

    }


    /* UPDATE HASH TANPA RELOAD */

    const newHash =
        page === 'dashboard'
            ? ''
            : '#' + page;


    if (
        window.location.hash !== newHash
    )
    {

        history.replaceState(
            null,
            '',
            window.location.pathname + newHash
        );

    }

}



/* HASH */

function openPageFromHash()
{

    const hash =
        window.location.hash;


    if (hash === '#tambah')
    {

        showPage('tambah');

    }
    else if (hash === '#daftar')
    {

        showPage('daftar');

    }
    else if (hash === '#pengaturan')
    {

        showPage('pengaturan');

    }
    else
    {

        showPage('dashboard');

    }

}



/* FILTER KONTRAK */

function initializeContractFilter()
{

    const searchInput =
        document.getElementById('contractSearch');

    const kategoriFilter =
        document.getElementById('filterKategori');

    const statusFilter =
        document.getElementById('filterStatus');

    const reminderFilter =
        document.getElementById('filterReminder');

    const resetButton =
        document.getElementById('resetContractFilter');

    const resultCount =
        document.getElementById('contractResultCount');

    const emptyRow =
        document.getElementById('filterEmptyRow');

    const rows =
        document.querySelectorAll('.contract-row');


    function filterContracts()
    {

        const search =
            searchInput
                ? searchInput.value.toLowerCase().trim()
                : '';


        const kategori =
            kategoriFilter
                ? kategoriFilter.value
                : '';


        const status =
            statusFilter
                ? statusFilter.value
                : '';


        const reminder =
            reminderFilter
                ? reminderFilter.value
                : '';


        let visibleCount = 0;


        rows.forEach(function(row)
        {

            const rowSearch =
                (
                    row.dataset.search || ''
                ).toLowerCase();


            const matchSearch =
                search === '' ||
                rowSearch.includes(search);


            const matchKategori =
                kategori === '' ||
                row.dataset.kategori === kategori;


            const matchStatus =
                status === '' ||
                row.dataset.status === status;


            const matchReminder =
                reminder === '' ||
                row.dataset.reminder === reminder;


            const visible =
                matchSearch &&
                matchKategori &&
                matchStatus &&
                matchReminder;


            if (visible)
            {

                row.classList.remove('hidden');

                visibleCount++;

            }
            else
            {

                row.classList.add('hidden');

            }

        });


        if (resultCount)
        {

            resultCount.textContent =
                visibleCount;

        }


        if (emptyRow)
        {

            if (
                rows.length > 0 &&
                visibleCount === 0
            )
            {

                emptyRow.classList.remove('hidden');

            }
            else
            {

                emptyRow.classList.add('hidden');

            }

        }

    }


    if (searchInput)
    {

        searchInput.addEventListener(
            'input',
            filterContracts
        );

    }


    if (kategoriFilter)
    {

        kategoriFilter.addEventListener(
            'change',
            filterContracts
        );

    }


    if (statusFilter)
    {

        statusFilter.addEventListener(
            'change',
            filterContracts
        );

    }


    if (reminderFilter)
    {

        reminderFilter.addEventListener(
            'change',
            filterContracts
        );

    }


    if (resetButton)
    {

        resetButton.addEventListener(
            'click',
            function()
            {

                if (searchInput)
                    searchInput.value = '';

                if (kategoriFilter)
                    kategoriFilter.value = '';

                if (statusFilter)
                    statusFilter.value = '';

                if (reminderFilter)
                    reminderFilter.value = '';

                filterContracts();

            }
        );

    }

}



/* DELETE */

function initializeDeleteConfirmation()
{

    const forms =
        document.querySelectorAll(
            '.delete-contract-form'
        );


    forms.forEach(function(form)
    {

        form.addEventListener(
            'submit',
            function(event)
            {

                const confirmed =
                    confirm(
                        'Apakah Anda yakin ingin menghapus kontrak ini?'
                    );


                if (!confirmed)
                {

                    event.preventDefault();

                }

            }
        );

    });

}



/* SUCCESS */

function initializeSuccessAlert()
{

    const alert =
        document.getElementById('successAlert');


    if (alert)
    {

        setTimeout(
            function()
            {

                alert.style.opacity = '0';

                alert.style.transition =
                    'opacity 0.4s ease';


                setTimeout(
                    function()
                    {

                        alert.remove();

                    },
                    400
                );

            },
            4000
        );

    }

}



/* PASSWORD MODAL */

function openPasswordModal()
{

    const modal =
        document.getElementById('passwordModal');


    modal.classList.remove('hidden');

    modal.classList.add('flex');

}


function closePasswordModal()
{

    const modal =
        document.getElementById('passwordModal');


    modal.classList.add('hidden');

    modal.classList.remove('flex');

}



/* LUPA PASSWORD */

function showForgotPasswordInfo()
{

    alert(
        'Silakan gunakan fitur Ubah Kata Sandi untuk membuat kata sandi baru. Jika Anda benar-benar lupa kata sandi, gunakan proses reset password Laravel.'
    );

}



/* THEME */

function initializeTheme()
{

    const themeSelect =
        document.getElementById('themeSelect');


    if (!themeSelect)
        return;


    const savedTheme =
        localStorage.getItem(
            'legaltrack_theme'
        ) || 'light';


    themeSelect.value =
        savedTheme;


    applyTheme(savedTheme);


    themeSelect.addEventListener(
        'change',
        function()
        {

            const theme =
                this.value;


            localStorage.setItem(
                'legaltrack_theme',
                theme
            );


            applyTheme(theme);

        }
    );

}


function applyTheme(theme)
{

    if (theme === 'dark')
    {

        document.body.classList.remove(
            'bg-slate-100',
            'text-slate-800'
        );

        document.body.classList.add(
            'bg-slate-950',
            'text-slate-100'
        );

    }
    else
    {

        document.body.classList.remove(
            'bg-slate-950',
            'text-slate-100'
        );

        document.body.classList.add(
            'bg-slate-100',
            'text-slate-800'
        );

    }

}



/* LANGUAGE */

function initializeLanguage()
{

    const languageSelect =
        document.getElementById('languageSelect');


    if (!languageSelect)
        return;


    const savedLanguage =
        localStorage.getItem(
            'legaltrack_language'
        ) || 'id';


    languageSelect.value =
        savedLanguage;


    languageSelect.addEventListener(
        'change',
        function()
        {

            localStorage.setItem(
                'legaltrack_language',
                this.value
            );


            if (this.value === 'en')
            {

                alert(
                    'English language preference saved. Full translation will be applied to the interface.'
                );

            }

        }
    );

}



/* PREFERENCES */

function initializePreferences()
{

    const latestToggle =
        document.getElementById(
            'latestContractToggle'
        );


    const deleteToggle =
        document.getElementById(
            'deleteConfirmToggle'
        );


    if (latestToggle)
    {

        latestToggle.checked =
            localStorage.getItem(
                'latest_contract_visible'
            ) !== 'false';


        latestToggle.addEventListener(
            'change',
            function()
            {

                localStorage.setItem(
                    'latest_contract_visible',
                    this.checked
                );

            }
        );

    }


    if (deleteToggle)
    {

        deleteToggle.checked =
            localStorage.getItem(
                'delete_confirmation'
            ) !== 'false';


        deleteToggle.addEventListener(
            'change',
            function()
            {

                localStorage.setItem(
                    'delete_confirmation',
                    this.checked
                );

            }
        );

    }

}



/* INIT */

document.addEventListener(
    'DOMContentLoaded',
    function()
    {

        openPageFromHash();

        initializeContractFilter();

        initializeDeleteConfirmation();

        initializeSuccessAlert();

        initializeTheme();

        initializeLanguage();

        initializePreferences();

    }
);


/* HASH CHANGE */

window.addEventListener(
    'hashchange',
    function()
    {

        openPageFromHash();

    }
);

</script>


</body>

</html>