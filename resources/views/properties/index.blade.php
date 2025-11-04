<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Realty Elite - Katalog Properti</title>
    {{-- Tambahkan link ke CSS minimal (misalnya Bootstrap) jika Anda ingin tampilan lebih baik --}}
    <style>
        body { font-family: sans-serif; margin: 40px; }
        .property-grid { display: flex; flex-wrap: wrap; gap: 20px; }
        .property-card { border: 1px solid #ccc; padding: 15px; width: 300px; }
        .property-card h3 { color: #007bff; }
        .property-card p { font-size: 0.9em; }
        .property-card .price { font-weight: bold; color: green; font-size: 1.2em; }
    </style>
</head>
<body>

    <header>
        <h1>ONE REALTY ELITE</h1>
        <h2>Katalog Properti Unggulan</h2>
        <hr>
    </header>

    <div class="property-grid">
        @forelse ($properties as $property)
            <div class="property-card">
                {{-- Asumsikan ada kolom 'foto' untuk gambar properti --}}
                {{-- <img src="{{ asset('storage/' . $property->foto) }}" alt="{{ $property->nama_property }}" style="width: 100%; height: auto;"> --}}

                <h3>{{ $property->nama_property }}</h3>
                <p>Status: <strong>{{ $property->status_property ?? 'N/A' }}</strong></p>
                <p class="price">Harga: Rp{{ number_format($property->harga, 0, ',', '.') }}</p>
                <p>{{ Str::limit($property->deskripsi_singkat, 80) }}</p>
                <a href="#">Lihat Detail</a>
            </div>
        @empty
            <p>Belum ada properti yang tersedia saat ini.</p>
        @endforelse
    </div>

</body>
</html>