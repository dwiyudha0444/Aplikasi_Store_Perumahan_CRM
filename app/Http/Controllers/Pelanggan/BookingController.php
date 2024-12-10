<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\DenahPerum;
use Illuminate\Http\Request;

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
        $booking = DenahPerum::findOrFail($id);
        return view('landingpage.booking.form_booking', compact('booking'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_users' => 'required|string|max:255',
            'id_bangunan' => 'required|string|max:255',
            'blok' => 'nullable|string|max:255',
        ]);

        Booking::create($validated);

        return redirect()->route('booking')->with('success', 'Data berhasil disimpan!');

    }
}
