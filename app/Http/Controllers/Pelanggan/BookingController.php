<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\DenahPerum;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return view('landingpage.booking.index');
    }

    public function edit($id)
    {
        $booking = DenahPerum::findOrFail($id);
        return view('landingpage.booking.form_booking', compact('booking'));
    }
}
