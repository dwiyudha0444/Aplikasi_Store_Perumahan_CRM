<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::orderBy('created_at', 'desc')->get();
        return view('dashboard.admin.atm.index', compact('pembayaran'));
    }

    public function create()
    {
        return view('dashboard.admin.atm.form');
    }

    public function edit($id)
    {
        $atm = Pembayaran::findOrFail($id);
        return view('dashboard.admin.atm.form_edit', compact('atm'));
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'bank_tujuan' => 'required|string|max:255',
            'keterangan'  => 'nullable|string|max:500',
            'nomer_atm'   => 'required|string|max:20',
        ]);

        // Simpan data ke database
        $transaksi = Pembayaran::create([
            'bank_tujuan' => $request->bank_tujuan,
            'keterangan'  => $request->keterangan,
            'nomer_atm'   => $request->nomer_atm,
        ]);

        // Redirect atau respon balik
        return redirect()->route('pembayaran_admin')->with('success', 'Data Berhasil Diperbarui.');
    }

    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'bank_tujuan' => 'required|string|max:255',
            'keterangan'  => 'nullable|string|max:500',
            'nomer_atm'   => 'required|string|max:20',
        ]);

        // Cari data berdasarkan ID
        $pembayaran = Pembayaran::findOrFail($id);

        // Update data di database
        $pembayaran->update([
            'bank_tujuan' => $request->bank_tujuan,
            'keterangan'  => $request->keterangan,
            'nomer_atm'   => $request->nomer_atm,
        ]);

        // Redirect atau respon balik
        return redirect()->route('pembayaran_admin')->with('success', 'Data Berhasil Diperbarui.');
    }

    public function destroy($id)
    {
        // Cari data berdasarkan ID
        $pembayaran = Pembayaran::findOrFail($id);

        // Hapus data dari database
        $pembayaran->delete();

        // Redirect atau respon balik
        return redirect()->route('pembayaran_admin')->with('success', 'Data berhasil dihapus.');
    }
}
