<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiAdminController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::orderBy('created_at', 'desc')->get();
        return view('dashboard.admin.transaksi.index', compact('transaksi'));
    }

    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('dashboard.admin.transaksi.show', compact('transaksi'));
    }

    public function showImage($id)
    {
        $transaksi = Transaksi::findOrFail($id);

        return view('dashboard.admin.transaksi.show_image', [
            'gambar' => asset('transaksi/assets/bukti_bayar/' . $transaksi->bukti_bayar),
        ]);
    }

    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('dashboard.admin.transaksi.form_edit', compact('transaksi'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'status' => 'required',
        ]);
    
        DB::beginTransaction(); // Mulai transaksi untuk menjaga konsistensi data
    
        try {
            // Update data ke tabel 'transaksi'
            DB::table('transaksi')->where('id', $id)->update([
                'status' => $request->status,  // Update status
                'updated_at' => now(),         // Timestamp update
            ]);
    
            // Ambil data transaksi berdasarkan ID
            $transaksi = DB::table('transaksi')->where('id', $id)->first();

            if (!$transaksi) {
                throw new \Exception('Transaksi tidak ditemukan');
            }
    
            if ($request->status === 'terverifikasi') {
                DB::table('angsuran')->insert([
                    'id_users' => $transaksi->id_users,  
                    'jumlah_angsuran' => $transaksi->harga,  
                    'sisa_angsuran' => $transaksi->harga,  
                    'created_at' => now(),               
                    'updated_at' => now(),               
                ]);
            }
    
            DB::commit(); 
    
            return redirect()->route('transaksi_admin')->with('success', 'Data berhasil diperbarui.');
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback jika ada kesalahan
    
            return redirect()->route('transaksi_admin')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    
    
}
