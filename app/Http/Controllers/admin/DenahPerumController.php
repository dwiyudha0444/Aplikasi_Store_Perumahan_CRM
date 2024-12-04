<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DenahPerum;
use Illuminate\Http\Request;

class DenahPerumController extends Controller
{
    public function index()
    {
        $perum = DenahPerum::orderBy('created_at', 'desc')->get();
        return view('dashboard.admin.denah_perum.index', compact('perum'));
    }
}
