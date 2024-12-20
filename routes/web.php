<?php

use App\Http\Controllers\admin\DashboardAdminController;
use App\Http\Controllers\admin\DashboardMarketingController;
use App\Http\Controllers\admin\DenahPerumController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingpageController;
use App\Http\Controllers\Marketing\PromosiMarketingController;
use App\Http\Controllers\Pelanggan\BookingController;
use App\Http\Controllers\Pelanggan\LandingpagePelangganController;
use App\Http\Controllers\Pelanggan\TransaksiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [landingpageController::class, 'index'])->name('landingpage');
Route::get('/landingpage_pelanggan', [LandingpagePelangganController::class, 'index'])->name('landingpage_pelanggan');

//auth
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login_proses', [LoginController::class, 'login_proses'])->name('login_proses');
Route::get('/register', [RegisterController::class, 'index'])->name('form_register');
Route::post('/register', [RegisterController::class, 'register_proses'])->name('register');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//dashboard admin
Route::get('/dashboard_admin', [DashboardAdminController::class, 'index'])->name('dashboard_admin');

Route::get('/dashboard_marketing', [DashboardMarketingController::class, 'index'])->name('dashboard_marketing');
Route::get('/promosi_marketing', [PromosiMarketingController::class, 'index'])->name('promosi_marketing');
Route::get('/promosi_marketing/form', [PromosiMarketingController::class, 'create'])->name('promosi_marketing_form');


//denah perum
Route::get('/denah_perum', [DenahPerumController::class, 'index'])->name('denah_perum');
Route::get('/form_bangunan', [DenahPerumController::class, 'create'])->name('form_bangunan');

//pelanggan
Route::get('/denah', [LandingpagePelangganController::class, 'indexDenah'])->name('denah');
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');

Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::get('/form_booking/{id}', [BookingController::class, 'edit'])->name('form_booking');
Route::post('/form_booking', [BookingController::class, 'store'])->name('booking.store');
