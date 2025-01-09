<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\Angsuran;
use Illuminate\Http\Request;

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
        return view('landingpage.angsuran.form_edit', compact('angsuran'));
    }
}
