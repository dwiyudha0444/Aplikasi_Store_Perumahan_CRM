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
}
