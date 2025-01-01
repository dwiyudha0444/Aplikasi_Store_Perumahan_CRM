<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Promosi;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index()
    {
        return view('landingpage.transaksi.index');
    }

    public function detail($id)
    {
        $transaksi = Booking::find($id);
        if ($transaksi) {
            return response()->json($transaksi);
        }
        return response()->json(['message' => 'Transaksi tidak ditemukan'], 404);
    }

    public function store(Request $request)
    {
        // Validasi input awal
        $request->validate([
            'id_users' => 'required|string|max:255',
            'promosi' => 'nullable|min:0', // Kode promosi bisa kosong
            'harga' => 'required|numeric|min:0',
        ]);



        // Cek jika kode promosi diisi
        if (!empty($request->promosi)) {
            // Validasi kode promosi
            $promosi = Promosi::where('kode', $request->promosi)
                ->where('status', 'aktif')
                ->where('batas_waktu', '>=', now())
                ->first();

            if ($promosi) {
                $harga = $request->harga;
                $potongan = 99;
                $hargaakhir = $harga - $potongan;
            } else {
                // Jika kode promosi tidak valid atau sudah kadaluwarsa
                return back()->with('error', 'Kode promosi tidak valid atau sudah kadaluwarsa.');
            }
        } else {
            // Jika kode promosi tidak diisi
            if (true) {
                $harga = $request->harga;
                $potongan = 0; // Tidak ada potongan jika tidak ada kode
                $hargaakhir = $harga; // Harga tetap
            }
        }

        // Insert data ke tabel 'transaksi'
        DB::table('transaksi')->insert([
            'id_users' => $request->id_users,
            'harga' => $hargaakhir,
            'promosi' => $request->promosi ?? null, // Jika kosong, kirim null
            'created_at' => now(),
        ]);

        return redirect()->route('transaksi')
            ->with('success', 'Transaksi berhasil disimpan.');
    }
}
