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
        // Ambil data booking yang telah melewati jatuh tempo
        $expiredBookings = Booking::where('created_at', '<', now()->subWeeks(2))->get();
    
        // Update status bangunan menjadi "open" untuk data yang jatuh tempo
        foreach ($expiredBookings as $expired) {
            $expired->bangunan->update(['status' => 'open']);
        }
    
        // Hapus data booking yang telah melewati jatuh tempo
        Booking::where('created_at', '<', now()->subWeeks(2))->delete();
    
        // Ambil data booking yang tersisa
        $booking = Booking::orderBy('created_at', 'desc')->get();
    
        // Tambahkan atribut tambahan ke setiap booking
        foreach ($booking as $item) {
            $item->jatuh_tempo = $item->created_at->addWeeks(2);
            $item->status_tempo = now()->greaterThanOrEqualTo($item->jatuh_tempo) ? 'Lewat Tempo' : 'Masih Berlaku';
            $item->sisa_hari = now()->diffInDays($item->jatuh_tempo, false);
        }
    
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
            'nama_pelanggan' => 'nullable|string|max:255',
            'blok' => 'nullable|string|max:255',
            'jalan' => 'nullable|string|max:255',
        ]);
    
        DB::beginTransaction(); // Mulai transaksi database untuk memastikan konsistensi
    
        try {
            // Insert data ke tabel 'pemilihan_siteplan'
            DB::table('pemilihan_siteplan')->insert([
                'id_users' => $request->id_users,
                'id_bangunan' => $request->id_bangunan,
                'nama_pelanggan' => $request->nama_pelanggan,
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


    public function destroy($id)
    {
        // Cari data berdasarkan ID
        $booking = Booking::findOrFail($id);

        // Hapus data dari database
        $booking->delete();

        // Redirect atau respon balik
        return redirect()->route('booking')->with('success', 'Data berhasil dihapus.');
    }
    


}
