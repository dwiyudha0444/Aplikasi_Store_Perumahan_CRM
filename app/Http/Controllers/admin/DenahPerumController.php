<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DenahPerum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DenahPerumController extends Controller
{
    public function index()
    {
        $perum = DenahPerum::orderBy('created_at', 'desc')->get();
        return view('dashboard.admin.denah_perum.index', compact('perum'));
    }

    public function edit($id)
    {
        $bangunan = DenahPerum::findOrFail($id);
        return view('dashboard.admin.denah_perum.form_edit', compact('bangunan'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'jalan' => 'required',
            'blok' => 'required',
            'nomer' => 'required',
            'panjang' => 'required',
            'luas' => 'required',
            'harga' => 'required',
            'foto' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
            'status' => 'required',
        ]);
    
        // Temukan data yang akan diupdate
        $bangunan = DB::table('bangunan')->where('id', $id)->first();
    
        // Jika data tidak ditemukan
        if (!$bangunan) {
            return redirect()->route('bangunan')->with('error', 'Data tidak ditemukan.');
        }
    
        // Simpan nama file lama atau baru
        $jdwlFile = $bangunan->foto;
    
        if ($request->hasFile('foto')) {
            // Hapus file lama jika ada
            if ($jdwlFile && file_exists(public_path('bangunan/assets/foto/' . $jdwlFile))) {
                unlink(public_path('bangunan/assets/foto/' . $jdwlFile));
            }
    
            // Simpan file baru
            $jdwlFile = 'bangunan_' . time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('bangunan/assets/foto'), $jdwlFile);
        }
    
        // Update data ke tabel 'bangunan'
        DB::table('bangunan')->where('id', $id)->update([
            'nama' => $request->nama,  // Update nama
            'jalan' => $request->jalan,  // Update jalan
            'blok' => $request->blok,  // Update blok
            'nomer' => $request->nomer,  // Update nomor
            'panjang' => $request->panjang,  // Update panjang
            'luas' => $request->luas,  // Update luas
            'harga' => $request->harga,  // Update harga
            'status' => $request->status,  // Update status
            'foto' => $jdwlFile,  // Update foto jika ada perubahan
            'updated_at' => now(),  // Timestamp update
        ]);
    
        return redirect()->route('denah_perum')->with('success', 'Data Berhasil Diperbarui.');
    }
    
}
