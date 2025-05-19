<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Daftar Pasien</h1>

    @if ($pasiens->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($pasiens as $pasien)
                <div class="border rounded-lg p-4 shadow bg-white">
                    <h2 class="text-lg font-semibold">{{ $pasien->nama }}</h2>
                    <p><strong>NIK:</strong> {{ $pasien->nik }}</p>
                    <p><strong>Tanggal Lahir:</strong> {{ \Carbon\Carbon::parse($pasien->tanggal_lahir)->format('d M Y') }}</p>
                    <p><strong>Jenis Kelamin:</strong> {{ $pasien->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
                    <p><strong>Alamat:</strong> {{ $pasien->alamat }}</p>
                    <p><strong>No HP:</strong> {{ $pasien->no_hp }}</p>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-red-600">Tidak ada data pasien.</p>
    @endif
</div>