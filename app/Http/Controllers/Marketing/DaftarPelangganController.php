<?php

namespace App\Http\Controllers\marketing;

use App\Http\Controllers\Controller;
use App\Models\DaftarPelanggan;
use Illuminate\Http\Request;

class DaftarPelangganController extends Controller
{
    public function index()
    {
        $promosi = DaftarPelanggan::orderBy('created_at', 'desc')->get();
        return view('dashboard.marketing.daftar_pelanggan.index', compact('promosi'));
    }

    public function destroy($id)
    {
        // Cari data berdasarkan ID
        $pelanggan = DaftarPelanggan::findOrFail($id);

        // Hapus data dari database
        $pelanggan->delete();

        // Redirect atau respon balik
        return redirect()->route('daftar_pelanggan_marketing')->with('success', 'Data berhasil dihapus.');
    }
}
