<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;

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
}
