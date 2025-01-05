<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Models\Promosi;
use Illuminate\Http\Request;

class PromosiMarketingController extends Controller
{
    public function index()
    {
        $promosi = Promosi::orderBy('created_at', 'desc')->get();
        return view('dashboard.marketing.promosi.index', compact('promosi'));
    }

    public function create()
    {
        return view('dashboard.marketing.promosi.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_promosi' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'batas_waktu' => 'required|date',
            'kode' => 'required|string|max:50|unique:promosi,kode',
            'potongan' => 'required|numeric|min:0',
            'status' => 'required|in:aktif,tidak_aktif',
        ]);

        Promosi::create([
            'jenis_promosi' => $request->jenis_promosi,
            'keterangan' => $request->keterangan,
            'batas_waktu' => $request->batas_waktu,
            'kode' => $request->kode,
            'potongan' => $request->potongan,
            'status' => $request->status,
        ]);

        return redirect()->route('promosi_marketing')->with('success', 'Promosi berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        // Cari data promosi berdasarkan ID
        $promosi = Promosi::findOrFail($id);

        // Hapus data
        $promosi->delete();

        // Redirect atau berikan respons
        return redirect()->route('promosi_marketing')->with('success', 'Promosi berhasil dihapus.');
    }
}
