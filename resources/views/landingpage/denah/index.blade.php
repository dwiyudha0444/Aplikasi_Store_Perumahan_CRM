<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siteplan Perempatan</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Tombol Back -->
    <div class="back-button">
        <a href="#" onclick="history.back();">⬅ Back</a>
    </div>

    <div class="siteplan">
        <!-- Jalan Horizontal -->
        <div class="jalan-horizontal"></div>
        <!-- Jalan Vertikal -->
        <div class="jalan-vertikal"></div>

        <!-- Masjid -->
        <div class="masjid" style="top: 115px; left: 50px;">Masjid</div>

        <!-- Rumah-rumah -->
        <!-- Atas -->
        <a href="{{ route('form_booking', $rumahA1->id) }}" class="rumah" style="top: 150px; left: 200px;">
            {{ $rumahA1->nama }}
        </a>


        <div class="rumah" id="{{ $rumahA2->id }}" style="top: 50px; left: 200px;">{{ $rumahA2->nama }}</div>

        <!-- Samping Kiri -->
        <div class="pos" style="top: 370px; left: 20px;">pos</div>
        <div class="rumah" id="{{ $rumahB1->id }}" style="top: 370px; left: 100px;">{{ $rumahB1->nama }}</div>
        <div class="rumah" id="{{ $rumahB2->id }}" style="top: 370px; left: 200px;">{{ $rumahB2->nama }}</div>
        <div class="rumah" id="{{ $rumahB3->id }}" style="top: 470px; left: 200px;">{{ $rumahB3->nama }}</div>

        <!-- Samping Kanan -->
        <div class="rumah" id="{{ $rumahC1->id }}" style="top: 50px; left: 420px;">{{ $rumahC1->nama }}</div>
        <div class="rumah" id="{{ $rumahC2->id }}" style="top: 150px; left: 420px;">{{ $rumahC2->nama }}</div>
        <div class="rumah" id="{{ $rumahC3->id }}" style="top: 150px; left: 520px;">{{ $rumahC3->nama }}</div>
        <div class="rumah" id="{{ $rumahC4->id }}" style="top: 150px; left: 620px;">{{ $rumahC4->nama }}</div>
        <div class="rumah" id="{{ $rumahC5->id }}" style="top: 150px; left: 720px;">{{ $rumahC5->nama }}</div>
        <!-- Bawah -->

        <div class="rumah" id="{{ $rumahD1->id }}" style="top: 370px; left: 420px;">{{ $rumahD1->nama }}</div>
        <div class="rumah" id="{{ $rumahD2->id }}" style="top: 370px; left: 520px;">{{ $rumahD2->nama }}</div>
        <div class="rumah" id="{{ $rumahD3->id }}" style="top: 370px; left: 620px;">{{ $rumahD3->nama }}</div>
        <div class="rumah" id="{{ $rumahD4->id }}" style="top: 370px; left: 720px;">{{ $rumahD4->nama }}</div>
        <div class="rumah" id="{{ $rumahD4->id }}" style="top: 470px; left: 420px;">{{ $rumahD5->nama }}</div>
    </div>
</body>

</html>
