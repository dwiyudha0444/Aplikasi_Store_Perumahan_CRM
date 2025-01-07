<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siteplan Perempatan</title>
    <link rel="stylesheet" href="styles.css">
</head>

<style>
    /* Tambahkan CSS di sini */

    .rumah.booking {
        background-color: yellow;
        pointer-events: none;
        cursor: not-allowed;
    }

    .rumah.lunas {
        background-color: red;
        pointer-events: none;
        cursor: not-allowed;
    }

    .rumah.open {
        background-color: gray;
        pointer-events: auto;
        cursor: pointer;
    }

    .back-button {
        margin-bottom: 20px;
    }

.keterangan-warna {
    position: absolute;
    top: 50%; /* Menempatkan di tengah secara vertikal */
    left: 20px; /* Jarak dari kiri */
    transform: translateY(-50%); /* Agar elemen benar-benar di tengah */
    background-color: #f9f9f9; /* Tambahkan latar belakang untuk visibilitas */
    padding: 10px;
    border: 1px solid #ccc; /* Tambahkan border untuk estetika */
    border-radius: 5px; /* Rounding sudut */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan */
}


</style>

<body>
    <!-- Tombol Back -->
    <div class="back-button">
        <a href="#" onclick="history.back();">⬅ Back</a>
    </div>

    <div class="keterangan-warna">
        <p><span style="background-color: gray; padding: 5px;">&nbsp;&nbsp;&nbsp;</span> Open (Tersedia)</p>
        <p><span style="background-color: yellow; padding: 5px;">&nbsp;&nbsp;&nbsp;</span> Booking (Dalam Proses
            Booking)</p>
        <p><span style="background-color: red; padding: 5px;">&nbsp;&nbsp;&nbsp;</span> Sold (Terjual)</p>
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
        <a href="{{ $rumahA1->status === 'open' ? route('form_booking', $rumahA1->id) : '#' }}" class="rumah"
            style="top: 150px; left: 200px; background-color: 
   @if ($rumahA1->status === 'open') gray 
   @elseif ($rumahA1->status === 'booking') 
       yellow 
   @elseif ($rumahA1->status === 'sold') 
       red @endif;"
            {{ $rumahA1->status !== 'open' ? 'onclick="return false;" style="pointer-events: none;"' : '' }}>
            {{ $rumahA1->nama }}
        </a>

        <a href="{{ $rumahA2->status === 'open' ? route('form_booking', $rumahA2->id) : '#' }}" class="rumah"
            style="top: 50px; left: 200px; background-color: 
   @if ($rumahA2->status === 'open') gray 
   @elseif ($rumahA2->status === 'booking') 
       yellow 
   @elseif ($rumahA2->status === 'sold') 
       red @endif;"
            {{ $rumahA2->status !== 'open' ? 'onclick="return false;" style="pointer-events: none;"' : '' }}>
            {{ $rumahA2->nama }}
        </a>


        <!-- Samping Kiri -->
        <div class="pos" style="top: 370px; left: 20px;">pos</div>
        <a href="{{ $rumahB1->status === 'open' ? route('form_booking', $rumahB1->id) : '#' }}" class="rumah"
            style="top: 370px; left: 100px; background-color: 
   @if ($rumahB1->status === 'open') gray 
   @elseif ($rumahB1->status === 'booking') 
       yellow 
   @elseif ($rumahB1->status === 'sold') 
       red @endif;"
            {{ $rumahB1->status !== 'open' ? 'onclick="return false;"' : '' }}>
            {{ $rumahB1->nama }}
        </a>

        <a href="{{ $rumahB2->status === 'open' ? route('form_booking', $rumahB2->id) : '#' }}" class="rumah"
            style="top: 370px; left: 200px; background-color: 
   @if ($rumahB2->status === 'open') gray 
   @elseif ($rumahB2->status === 'booking') 
       yellow 
   @elseif ($rumahB2->status === 'sold') 
       red @endif;"
            {{ $rumahB2->status !== 'open' ? 'onclick="return false;" style="pointer-events: none;"' : '' }}>
            {{ $rumahB2->nama }}
        </a>

        <a href="{{ $rumahB3->status === 'open' ? route('form_booking', $rumahB3->id) : '#' }}" class="rumah"
            style="top: 470px; left: 200px; background-color: 
   @if ($rumahB3->status === 'open') gray 
   @elseif ($rumahB3->status === 'booking') 
       yellow 
   @elseif ($rumahB3->status === 'sold') 
       red @endif;"
            {{ $rumahB3->status !== 'open' ? 'onclick="return false;" style="pointer-events: none;"' : '' }}>
            {{ $rumahB3->nama }}
        </a>

        <!-- Samping Kanan -->
        <a href="{{ $rumahC1->status === 'open' ? route('form_booking', $rumahC1->id) : '#' }}" class="rumah"
            style="top: 50px; left: 420px; background-color: 
   @if ($rumahC1->status === 'open') gray 
   @elseif ($rumahC1->status === 'booking') 
       yellow 
   @elseif ($rumahC1->status === 'sold') 
       red @endif;"
            {{ $rumahC1->status !== 'open' ? 'onclick="return false;" style="pointer-events: none;"' : '' }}>
            {{ $rumahC1->nama }}
        </a>

        <a href="{{ $rumahC2->status === 'open' ? route('form_booking', $rumahC2->id) : '#' }}" class="rumah"
            style="top: 150px; left: 420px; background-color: 
   @if ($rumahC2->status === 'open') gray 
   @elseif ($rumahC2->status === 'booking') 
       yellow 
   @elseif ($rumahC2->status === 'sold') 
       red @endif;"
            {{ $rumahC2->status !== 'open' ? 'onclick="return false;" style="pointer-events: none;"' : '' }}>
            {{ $rumahC2->nama }}
        </a>

        <a href="{{ $rumahC3->status === 'open' ? route('form_booking', $rumahC3->id) : '#' }}" class="rumah"
            style="top: 150px; left: 520px; background-color: 
   @if ($rumahC3->status === 'open') gray 
   @elseif ($rumahC3->status === 'booking') 
       yellow 
   @elseif ($rumahC3->status === 'sold') 
       red @endif;"
            {{ $rumahC3->status !== 'open' ? 'onclick="return false;" style="pointer-events: none;"' : '' }}>
            {{ $rumahC3->nama }}
        </a>

        <a href="{{ $rumahC4->status === 'open' ? route('form_booking', $rumahC4->id) : '#' }}" class="rumah"
            style="top: 150px; left: 620px; background-color: 
   @if ($rumahC4->status === 'open') gray 
   @elseif ($rumahC4->status === 'booking') 
       yellow 
   @elseif ($rumahC4->status === 'sold') 
       red @endif;"
            {{ $rumahC4->status !== 'open' ? 'onclick="return false;" style="pointer-events: none;"' : '' }}>
            {{ $rumahC4->nama }}
        </a>

        <a href="{{ $rumahC5->status === 'open' ? route('form_booking', $rumahC5->id) : '#' }}" class="rumah"
            style="top: 150px; left: 720px; background-color: 
   @if ($rumahC5->status === 'open') gray 
   @elseif ($rumahC5->status === 'booking') 
       yellow 
   @elseif ($rumahC5->status === 'sold') 
       red @endif;"
            {{ $rumahC5->status !== 'open' ? 'onclick="return false;" style="pointer-events: none;"' : '' }}>
            {{ $rumahC5->nama }}
        </a>

        <!-- Bawah -->
        <a href="{{ $rumahD1->status === 'open' ? route('form_booking', $rumahD1->id) : '#' }}" class="rumah"
            style="top: 370px; left: 420px; background-color: 
   @if ($rumahD1->status === 'open') gray 
   @elseif ($rumahD1->status === 'booking') 
       yellow 
   @elseif ($rumahD1->status === 'sold') 
       red @endif;"
            {{ $rumahD1->status !== 'open' ? 'onclick="return false;" style="pointer-events: none;"' : '' }}>
            {{ $rumahD1->nama }}
        </a>

        <a href="{{ $rumahD2->status === 'open' ? route('form_booking', $rumahD2->id) : '#' }}" class="rumah"
            style="top: 370px; left: 520px; background-color: 
   @if ($rumahD2->status === 'open') gray 
   @elseif ($rumahD2->status === 'booking') 
       yellow 
   @elseif ($rumahD2->status === 'sold') 
       red @endif;"
            {{ $rumahD2->status !== 'open' ? 'onclick="return false;" style="pointer-events: none;"' : '' }}>
            {{ $rumahD2->nama }}
        </a>

        <a href="{{ $rumahD3->status === 'open' ? route('form_booking', $rumahD3->id) : '#' }}" class="rumah"
            style="top: 370px; left: 620px; background-color: 
   @if ($rumahD3->status === 'open') gray 
   @elseif ($rumahD3->status === 'booking') 
       yellow 
   @elseif ($rumahD3->status === 'sold') 
       red @endif;"
            {{ $rumahD3->status !== 'open' ? 'onclick="return false;" style="pointer-events: none;"' : '' }}>
            {{ $rumahD3->nama }}
        </a>

        <a href="{{ $rumahD4->status === 'open' ? route('form_booking', $rumahD4->id) : '#' }}" class="rumah"
            style="top: 370px; left: 720px; background-color: 
   @if ($rumahD4->status === 'open') gray 
   @elseif ($rumahD4->status === 'booking') 
       yellow 
   @elseif ($rumahD4->status === 'sold') 
       red @endif;"
            {{ $rumahD4->status !== 'open' ? 'onclick="return false;" style="pointer-events: none;"' : '' }}>
            {{ $rumahD4->nama }}
        </a>

        <a href="{{ $rumahD5->status === 'open' ? route('form_booking', $rumahD5->id) : '#' }}" class="rumah"
            style="top: 470px; left: 420px; background-color: 
   @if ($rumahD5->status === 'open') gray 
   @elseif ($rumahD5->status === 'booking') 
       yellow 
   @elseif ($rumahD5->status === 'sold') 
       red @endif;"
            {{ $rumahD5->status !== 'open' ? 'onclick="return false;" style="pointer-events: none;"' : '' }}>
            {{ $rumahD5->nama }}
        </a>

    </div>
</body>

</html>
