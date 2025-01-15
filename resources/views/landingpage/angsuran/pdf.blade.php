<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Angsuran</title>
</head>
<body>
    <h1>Laporan Angsuran</h1>
    <p><strong>ID Pembayaran:</strong> {{ $angsuran->id_pembayaran ?? 'Belum diisi' }}</p>
    <p><strong>Nama Pelanggan:</strong> {{ $angsuran->nama_pelanggan ?? 'Belum diisi' }}</p>
    <p><strong>Tenor Angsuran:</strong> {{ $angsuran->tenor_angsuran ?? 'Belum diisi' }} Tahun</p>
    <p><strong>Cicilan:</strong> {{ $angsuran->cicilan ?? 'Belum diisi' }}</p>
</body>
</html>
