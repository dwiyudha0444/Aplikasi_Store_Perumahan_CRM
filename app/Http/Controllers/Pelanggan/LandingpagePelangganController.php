<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\DenahPerum;
use Illuminate\Http\Request;

class LandingpagePelangganController extends Controller
{
    public function index()
    {
        
        $pelanggans = DenahPerum::latest()->take(3)->get();
        // Mengirim data pelanggan ke view
        return view('landingpage.pelanggan.home', compact('pelanggans'));
    }

    public function indexDenah()
    {

        $rumah = DenahPerum::all();
        $rumahA1 = DenahPerum::where('id', '1')->first();
        $rumahA2 = DenahPerum::where('id', '2')->first();
        $rumahB1 = DenahPerum::where('id', '3')->first();
        $rumahB2 = DenahPerum::where('id', '4')->first();
        $rumahB3 = DenahPerum::where('id', '5')->first();
        $rumahC1 = DenahPerum::where('id', '6')->first();
        $rumahC2 = DenahPerum::where('id', '7')->first();
        $rumahC3 = DenahPerum::where('id', '8')->first();
        $rumahC4 = DenahPerum::where('id', '9')->first();
        $rumahC5 = DenahPerum::where('id', '10')->first();
        $rumahD1 = DenahPerum::where('id', '11')->first();
        $rumahD2 = DenahPerum::where('id', '12')->first();
        $rumahD3 = DenahPerum::where('id', '13')->first();
        $rumahD4 = DenahPerum::where('id', '14')->first();
        $rumahD5 = DenahPerum::where('id', '15')->first();

        return view('landingpage.denah.index', compact(
            'rumahA1',
            'rumahA2',
            'rumahB1',
            'rumahB2',
            'rumahB3',
            'rumahC1',
            'rumahC2',
            'rumahC3',
            'rumahC4',
            'rumahC5',
            'rumahD1',
            'rumahD2',
            'rumahD3',
            'rumahD4',
            'rumahD5',
            'rumah'
        ));
    }
}
