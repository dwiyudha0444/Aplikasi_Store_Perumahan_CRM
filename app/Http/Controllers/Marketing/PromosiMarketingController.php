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
}
