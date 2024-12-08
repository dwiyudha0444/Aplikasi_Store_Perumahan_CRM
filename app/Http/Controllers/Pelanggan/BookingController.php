<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return view('landingpage.booking.index');
    }

    public function create()
    {
        return view('landingpage.booking.form_booking');
    }
}