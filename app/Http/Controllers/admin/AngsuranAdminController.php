<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Angsuran;
use Illuminate\Http\Request;

class AngsuranAdminController extends Controller
{
    public function index()
    {
        $angsuran = Angsuran::orderBy('created_at', 'desc')->get();
        return view('dashboard.admin.angsuran.index', compact('angsuran'));
    }
}
