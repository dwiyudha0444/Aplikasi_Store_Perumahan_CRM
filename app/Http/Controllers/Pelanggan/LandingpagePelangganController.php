<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingpagePelangganController extends Controller
{
    public function index()
    {
        return view('landingpage.pelanggan.index');
    }

    public function indexDenah()
    {
        return view('landingpage.denah.index');
    }
}

