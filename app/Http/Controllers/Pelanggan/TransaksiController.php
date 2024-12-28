<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        return view('landingpage.denah.transaksi');
    }

    public function detail($id)
    {
        $transaksi = Booking::find($id);
        if ($transaksi) {
            return response()->json($transaksi);
        }
        return response()->json(['message' => 'Transaksi tidak ditemukan'], 404);
    }
}
