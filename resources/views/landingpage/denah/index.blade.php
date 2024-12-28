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
        <!-- Atas -->
        <a href="{{ route('form_booking', $rumahA1->id) }}" class="rumah" style="top: 150px; left: 200px;">
            {{ $rumahA1->nama }}
        </a>

        <a href="{{ route('form_booking', $rumahA2->id) }}" class="rumah" style="top: 50px; left: 200px;">
            {{ $rumahA2->nama }}
        </a>

        <!-- Samping Kiri -->
        <div class="pos" style="top: 370px; left: 20px;">pos</div>
        <a href="{{ route('form_booking', $rumahB1->id) }}" class="rumah" style="top: 370px; left: 100px;">
            {{ $rumahB1->nama }}
        </a>
        <a href="{{ route('form_booking', $rumahB2->id) }}" class="rumah" style="top: 370px; left: 200px;">
            {{ $rumahB2->nama }}
        </a>
        <a href="{{ route('form_booking', $rumahB3->id) }}" class="rumah" style="top: 470px; left: 200px;">
            {{ $rumahB3->nama }}
        </a>

        <!-- Samping Kanan -->
        <a href="{{ route('form_booking', $rumahC1->id) }}" class="rumah" style="top: 50px; left: 420px;">
            {{ $rumahC1->nama }}
        </a>
        <a href="{{ route('form_booking', $rumahC2->id) }}" class="rumah" style="top: 150px; left: 420px;">
            {{ $rumahC2->nama }}
        </a>
        <a href="{{ route('form_booking', $rumahC3->id) }}" class="rumah" style="top: 150px; left: 520px;">
            {{ $rumahC3->nama }}
        </a>
        <a href="{{ route('form_booking', $rumahC4->id) }}" class="rumah" style="top: 150px; left: 620px;">
            {{ $rumahC4->nama }}
        </a>
        <a href="{{ route('form_booking', $rumahC5->id) }}" class="rumah" style="top: 150px; left: 720px;">
            {{ $rumahC5->nama }}
        </a>

        <!-- Bawah -->
        <a href="{{ route('form_booking', $rumahD1->id) }}" class="rumah" style="top: 370px; left: 420px;">
            {{ $rumahD1->nama }}
        </a>
        <a href="{{ route('form_booking', $rumahD2->id) }}" class="rumah" style="top: 370px; left: 520px;">
            {{ $rumahD2->nama }}
        </a>
        <a href="{{ route('form_booking', $rumahD3->id) }}" class="rumah" style="top: 370px; left: 620px;">
            {{ $rumahD3->nama }}
        </a>
        <a href="{{ route('form_booking', $rumahD4->id) }}" class="rumah" style="top: 370px; left: 720px;">
            {{ $rumahD4->nama }}
        </a>
        <a href="{{ route('form_booking', $rumahD5->id) }}" class="rumah" style="top: 470px; left: 420px;">
            {{ $rumahD5->nama }}
        </a>
    </div>
</body>

</html>
