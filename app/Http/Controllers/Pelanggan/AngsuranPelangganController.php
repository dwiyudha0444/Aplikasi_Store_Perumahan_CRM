<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\Angsuran;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class AngsuranPelangganController extends Controller
{
    public function index()
    {
        $angsuran = Angsuran::orderBy('created_at', 'desc')->get();
        return view('landingpage.angsuran.index', compact('angsuran'));
    }

    public function edit($id)
    {
        $angsuran = Angsuran::findOrFail($id);
        $atmData = Pembayaran::all();
        return view('landingpage.angsuran.form_edit', compact('angsuran', 'atmData'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima
        $request->validate([
            'id_pembayaran' => 'required|exists:pembayaran,id',  // Pastikan id_pembayaran valid dan ada di tabel atm
            'id_users' => 'required|exists:users,id',      // Pastikan id_users valid dan ada di tabel users
            'tenor_angsuran' => 'required|in:10,25,30',    // Hanya bisa memilih antara 10, 25, atau 30 tahun
            'cicilan' => 'required|numeric|min:1',         // Cicilan harus berupa angka positif
        ]);

        // Cari data pembayaran yang akan diperbarui
        $pembayaran = Angsuran::findOrFail($id);

        // Update data yang diterima dari form
        $pembayaran->id_pembayaran = $request->id_pembayaran;
        $pembayaran->id_users = $request->id_users;
        $pembayaran->tenor_angsuran = $request->tenor_angsuran;
        $pembayaran->cicilan = $request->cicilan;

        // Simpan perubahan ke database
        $pembayaran->save();

        // Redirect setelah berhasil memperbarui
        return redirect()->route('angsuran')  // Ganti dengan rute yang sesuai
            ->with('success', 'Data pembayaran berhasil diperbarui');
    }

    public function downloadPdf($id)
    {
        // Ambil data berdasarkan id
        $angsuran = Angsuran::findOrFail($id);

        // Set up Dompdf options
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);

        // Create Dompdf instance
        $dompdf = new Dompdf($options);

        // Load HTML content for the PDF
        $html = view('landingpage.angsuran.pdf', compact('angsuran'))->render();

        // Load HTML into Dompdf
        $dompdf->loadHtml($html);

        // Set paper size (optional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF (first pass)
        $dompdf->render();

        // Stream the PDF to the browser
        return $dompdf->stream('laporan_angsuran_' . $angsuran->id_pembayaran . '.pdf');
    }
}
