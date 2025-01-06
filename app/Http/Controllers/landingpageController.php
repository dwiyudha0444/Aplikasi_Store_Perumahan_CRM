<?php

namespace App\Http\Controllers;

use App\Models\DenahPerum;
use Illuminate\Http\Request;

class landingpageController extends Controller
{
    public function index()
    {
        
        $pelanggans = DenahPerum::latest()->take(3)->get();
        // Mengirim data pelanggan ke view
        return view('landingpage.pelanggan.home', compact('pelanggans'));
    }
}
