<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\DenahPerum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index()
    {
        // Ambil data dari model Booking, urutkan berdasarkan created_at secara descending
        $booking = Booking::orderBy('created_at', 'desc')->get();

        // Kirim data ke view
        return view('landingpage.booking.index', compact('booking'));
    }


    public function edit($id)
    {
        $bangunan = DenahPerum::findOrFail($id);
        return view('landingpage.booking.form_booking', compact('bangunan'));
    }

    public function store(Request $request)
    {
        $request->validate([

            'id_users' => 'required|string|max:255',
            'id_bangunan' => 'required|string|max:255',
            'blok' => 'nullable|string|max:255',
            'jalan' => 'nullable|string|max:255',

        ]);


        // Insert data ke tabel 'berkas'
        DB::table('pemilihan_siteplan')->insert([
            'id_users' => $request->id_users,
            'id_bangunan' => $request->id_bangunan,
            'blok' => $request->blok,
            'jalan' => $request->jalan,
            'created_at' => now(),
        ]);

        return redirect()->route('booking')
            ->with('success', 'Data Berhasil Disimpan');
    }


}
