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
        $transaksi = Transaksi::all();
        return view('landingpage.transaksi.index', compact('transaksi'));
    }

    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('landingpage.transaksi.form_edit', compact('transaksi'));
    }

    public function detail($id)
    {
        $transaksi = Booking::find($id);
        if ($transaksi) {
            return response()->json($transaksi);
        }

        if ($transaksi) {
            // Ambil data Bangunan terkait dari relasi
            $bangunan = $transaksi->user;

            return response()->json([
                'success' => true,
                'data' => $bangunan,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Data tidak ditemukan.',
        ]);

        return response()->json(['message' => 'Transaksi tidak ditemukan'], 404);
    }

    public function store(Request $request)
    {
        // Validasi input awal
        $request->validate([
            'id_users' => 'required|string|max:255',
            'id_bangunan' => 'required|string|max:255',
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
                $potongan = $promosi->potongan;
                $hargaakhir = $harga - $potongan;
                $promosi->increment('digunakan');
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
            'id_bangunan' => $request->id_bangunan,
            'harga' => $hargaakhir,
            'status' => 'proses',
            'tanggal_bayar' => now(),
            'promosi' => $request->promosi ?? null, // Jika kosong, kirim null
            'created_at' => now(),
        ]);

        DB::table('pemilihan_siteplan')->where('id_bangunan', $request->id_bangunan)->delete();


        return redirect()->route('transaksi')
            ->with('success', 'Transaksi berhasil disimpan.');
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'bukti_bayar' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
            'status' => 'required',
            'metode_pembayaran' => 'required',
            'blok' => 'required',
            'alamat' => 'required',
            'status' => 'required',
        ]);

        // Temukan data yang akan diupdate
        $transaksi = DB::table('transaksi')->where('id', $id)->first();

        // Jika data tidak ditemukan
        if (!$transaksi) {
            return redirect()->route('transaksi')->with('error', 'Data tidak ditemukan.');
        }

        // Simpan nama file lama atau baru
        $jdwlFile = $transaksi->bukti_bayar;

        if ($request->hasFile('bukti_bayar')) {
            // Hapus file lama jika ada
            if ($jdwlFile && file_exists(public_path('transaksi/assets/bukti_bayar/' . $jdwlFile))) {
                unlink(public_path('transaksi/assets/bukti_bayar/' . $jdwlFile));
            }

            // Simpan file baru
            $jdwlFile = 'jadwal_' . time() . '.' . $request->bukti_bayar->extension();
            $request->bukti_bayar->move(public_path('transaksi/assets/bukti_bayar'), $jdwlFile);
        }

        // Update data ke tabel 'transaksi'
        DB::table('transaksi')->where('id', $id)->update([
            'status' => $request->status,
            'metode_pembayaran' => $request->metode_pembayaran,
            'bukti_bayar' => $jdwlFile,
            'blok' => $request->blok,
            'alamat' => $request->alamat,
            'status' => $request->status,
            'updated_at' => now(),
        ]);

        return redirect()->route('transaksi')->with('success', 'Data Berhasil Diperbarui.');
    }
}
