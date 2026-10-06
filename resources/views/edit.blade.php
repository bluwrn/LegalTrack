<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Kontrak - LegalTrack</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

<div class="max-w-4xl mx-auto py-10 px-4">

    <div class="mb-8">

        <a href="{{ route('contracts.index') }}"
           class="text-blue-600 hover:text-blue-800">
            ← Kembali
        </a>

        <h1 class="text-3xl font-bold text-gray-800 mt-4">
            Edit Kontrak
        </h1>

        <p class="text-gray-500">
            Perbarui informasi kontrak.
        </p>

    </div>

    @if ($errors->any())

        <div class="bg-red-100 border border-red-300 text-red-700 p-4 rounded-lg mb-6">

            <ul class="list-disc ml-5">

                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif

    <div class="bg-white rounded-2xl shadow p-8">

        <form
            action="{{ route('contracts.update', $contract) }}"
            method="POST">

            @csrf
            @method('PUT')

            <!-- Kode -->
            <div class="mb-5">

                <label class="block font-semibold text-gray-700 mb-2">
                    Kode Kontrak
                </label>

                <input
                    type="text"
                    name="kode"
                    value="{{ old('kode', $contract->kode) }}"
                    required
                    class="w-full border border-gray-300 rounded-lg px-4 py-3"
                >

            </div>

            <!-- Judul -->
            <div class="mb-5">

                <label class="block font-semibold text-gray-700 mb-2">
                    Judul Kontrak
                </label>

                <input
                    type="text"
                    name="judul"
                    value="{{ old('judul', $contract->judul) }}"
                    required
                    class="w-full border border-gray-300 rounded-lg px-4 py-3"
                >

            </div>

            <!-- Kategori -->
            <div class="mb-5">

                <label class="block font-semibold text-gray-700 mb-2">
                    Kategori
                </label>

                <select
                    name="kategori"
                    required
                    class="w-full border border-gray-300 rounded-lg px-4 py-3">

                    @foreach (['Karyawan', 'Vendor', 'Sub-kontraktor', 'Klien'] as $kategori)

                        <option
                            value="{{ $kategori }}"
                            {{ old('kategori', $contract->kategori) == $kategori ? 'selected' : '' }}>
                            {{ $kategori }}
                        </option>

                    @endforeach

                </select>

            </div>

            <!-- Pihak -->
            <div class="mb-5">

                <label class="block font-semibold text-gray-700 mb-2">
                    Pihak Terkait
                </label>

                <input
                    type="text"
                    name="pihak"
                    value="{{ old('pihak', $contract->pihak) }}"
                    required
                    class="w-full border border-gray-300 rounded-lg px-4 py-3"
                >

            </div>

            <!-- Tanggal -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">

                <div>

                    <label class="block font-semibold text-gray-700 mb-2">
                        Tanggal Mulai
                    </label>

                    <input
                        type="date"
                        name="tanggal_mulai"
                        value="{{ old('tanggal_mulai', $contract->tanggal_mulai->format('Y-m-d')) }}"
                        required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3"
                    >

                </div>

                <div>

                    <label class="block font-semibold text-gray-700 mb-2">
                        Tanggal Berakhir
                    </label>

                    <input
                        type="date"
                        name="tanggal_berakhir"
                        value="{{ old('tanggal_berakhir', $contract->tanggal_berakhir->format('Y-m-d')) }}"
                        required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3"
                    >

                </div>

            </div>

            <!-- Nilai -->
            <div class="mb-5">

                <label class="block font-semibold text-gray-700 mb-2">
                    Nilai Kontrak
                </label>

                <input
                    type="number"
                    name="nilai_kontrak"
                    value="{{ old('nilai_kontrak', $contract->nilai_kontrak) }}"
                    min="0"
                    step="0.01"
                    required
                    class="w-full border border-gray-300 rounded-lg px-4 py-3"
                >

            </div>

            <!-- Status -->
            <div class="mb-5">

                <label class="block font-semibold text-gray-700 mb-2">
                    Status
                </label>

                <select
                    name="status"
                    required
                    class="w-full border border-gray-300 rounded-lg px-4 py-3">

                    @foreach ([
                        'Draft',
                        'Review Internal',
                        'Review Eksternal',
                        'Revisi',
                        'Menunggu Tanda Tangan',
                        'Selesai Ditandatangani'
                    ] as $status)

                        <option
                            value="{{ $status }}"
                            {{ old('status', $contract->status) == $status ? 'selected' : '' }}>
                            {{ $status }}
                        </option>

                    @endforeach

                </select>

            </div>

            <!-- Keterangan -->
            <div class="mb-7">

                <label class="block font-semibold text-gray-700 mb-2">
                    Keterangan
                </label>

                <textarea
                    name="keterangan"
                    rows="4"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3"
                >{{ old('keterangan', $contract->keterangan) }}</textarea>

            </div>

            <div class="flex justify-end gap-3">

                <a
                    href="{{ route('contracts.index') }}"
                    class="px-6 py-3 border border-gray-300 rounded-lg">
                    Batal
                </a>

                <button
                    type="submit"
                    class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>