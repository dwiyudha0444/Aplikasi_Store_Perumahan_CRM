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
        $booking = Booking::orderBy('created_at', 'desc')->get();
        return view('landingpage.booking.index', compact('booking'));
    }


    public function edit($id)
    {
        $bangunan = DenahPerum::findOrFail($id);
        return view('landingpage.booking.form_booking', compact('bangunan'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_users' => 'required|string|max:255',
            'id_bangunan' => 'required|string|max:255',
            'blok' => 'nullable|string|max:255',
            'jalan' => 'nullable|string|max:255',
        ]);
    
        DB::beginTransaction(); // Mulai transaksi database untuk memastikan konsistensi
    
        try {
            // Insert data ke tabel 'pemilihan_siteplan'
            DB::table('pemilihan_siteplan')->insert([
                'id_users' => $request->id_users,
                'id_bangunan' => $request->id_bangunan,
                'blok' => $request->blok,
                'jalan' => $request->jalan,
                'created_at' => now(),
            ]);
    
            // Update status di tabel 'bangunan'
            DB::table('bangunan')
                ->where('id', $request->id_bangunan)
                ->update(['status' => 'booking', 'updated_at' => now()]);
    
            DB::commit(); // Commit transaksi jika semuanya berhasil
    
            // Redirect dengan pesan sukses
            return redirect()->route('booking')->with('success', 'Data berhasil disimpan dan status bangunan diperbarui.');
        } catch (\Exception $e) {
            DB::rollBack(); // Batalkan semua perubahan jika terjadi kesalahan
    
            // Redirect dengan pesan error
            return redirect()->route('booking')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    


}
