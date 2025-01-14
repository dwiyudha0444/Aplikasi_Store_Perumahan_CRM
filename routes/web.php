<?php

use App\Http\Controllers\admin\AngsuranAdminController;
use App\Http\Controllers\admin\DashboardAdminController;
use App\Http\Controllers\admin\DashboardMarketingController;
use App\Http\Controllers\admin\DenahPerumController;
use App\Http\Controllers\admin\PembayaranController;
use App\Http\Controllers\admin\TransaksiAdminController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingpageController;
use App\Http\Controllers\marketing\DaftarPelangganController;
use App\Http\Controllers\Marketing\PromosiMarketingController;
use App\Http\Controllers\Pelanggan\AngsuranPelangganController;
use App\Http\Controllers\Pelanggan\BookingController;
use App\Http\Controllers\Pelanggan\LandingpagePelangganController;
use App\Http\Controllers\Pelanggan\TransaksiController;
use App\Models\DaftarPelanggan;
use App\Models\Pembayaran;
use App\Models\Transaksi;

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
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//dashboard admin
Route::get('/dashboard_admin', [DashboardAdminController::class, 'index'])->name('dashboard_admin');

Route::get('/dashboard_marketing', [DashboardMarketingController::class, 'index'])->name('dashboard_marketing');
Route::get('/promosi_marketing', [PromosiMarketingController::class, 'index'])->name('promosi_marketing');
Route::get('/promosi_marketing/form', [PromosiMarketingController::class, 'create'])->name('promosi_marketing_form');
Route::post('/promosi_marketing/store', [PromosiMarketingController::class, 'store'])->name('promosi_marketing_store');
Route::delete('/promosi/{id}', [PromosiMarketingController::class, 'destroy'])->name('promosi.destroy');

Route::get('/marketing/daftar_pelanggan', [DaftarPelangganController::class, 'index'])->name('daftar_pelanggan_marketing');
Route::delete('/marketing/daftar_pelanggan/{id}', [DaftarPelangganController::class, 'destroy'])->name('daftar_pelanggan_marketing.destroy');


Route::get('/denah_edit/{id}', [DenahPerumController::class, 'edit'])->name('denah_edit');
Route::get('/denah_show/{id}', [DenahPerumController::class, 'show'])->name('denah_show');
Route::put('/denah_edit/{id}', [DenahPerumController::class, 'update'])->name('denah_update');

Route::get('/transaksi/admin', [TransaksiAdminController::class, 'index'])->name('transaksi_admin');
Route::get('/transaksi/show/{id}', [TransaksiAdminController::class, 'show'])->name('transaksi_admin_show');
Route::get('/transaksi/{id}/show-image', [TransaksiAdminController::class, 'showImage'])->name('transaksi.show_image');
Route::get('/transaksi/edit/{id}', [TransaksiAdminController::class, 'edit'])->name('transaksi_admin_edit');
Route::put('/transaksi/edit/{id}', [TransaksiAdminController::class, 'update'])->name('transaksi_admin_update');
Route::delete('/transaksi/delete/{id}', [TransaksiAdminController::class, 'destroy'])->name('delete_transaksi_admin');


//denah perum
Route::get('/denah_perum', [DenahPerumController::class, 'index'])->name('denah_perum');
Route::get('/form_bangunan', [DenahPerumController::class, 'create'])->name('form_bangunan');

//pelanggan
Route::get('/denah', [LandingpagePelangganController::class, 'indexDenah'])->name('denah');
Route::get('/transaksi1', [TransaksiController::class, 'index'])->name('transaksi');

Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::get('/form_booking/{id}', [BookingController::class, 'edit'])->name('form_booking');
Route::post('/form_booking', [BookingController::class, 'store'])->name('booking.store');
Route::delete('/booking/delete/{id}', [BookingController::class, 'destroy'])->name('delete_booking');


Route::get('/transaksi/detail/{id}', [TransaksiController::class, 'detail']);
Route::post('/transaksi/bayar', [TransaksiController::class, 'store']);

Route::get('/transaksi_update/{id}', [TransaksiController::class, 'edit'])->name('get_transaksi_update');
Route::put('/transaksi_update_/{id}', [TransaksiController::class, 'update'])->name('transaksi_update');

//angsuran

Route::get('/angsuran', [AngsuranPelangganController::class, 'index'])->name('angsuran');

Route::get('/angsuran/admin', [AngsuranAdminController::class, 'index'])->name('angsuran_admin');

Route::get('/angsuran/edit/{id}', [AngsuranPelangganController::class, 'edit'])->name('edit_angsuran');
Route::put('/angsuran/edit/{id}', [AngsuranPelangganController::class, 'update'])->name('update_angsuran');
Route::get('/angsuran/download-pdf/{id}', [AngsuranPelangganController::class, 'downloadPdf'])->name('download_pdf');

//pembayaran

Route::get('/pembayaran/admin', [PembayaranController::class, 'index'])->name('pembayaran_admin');
Route::get('/pembayaran/admin/form', [PembayaranController::class, 'create'])->name('create_pembayaran_admin');
Route::post('/pembayaran/admin/store', [PembayaranController::class, 'store'])->name('store_pembayaran_admin');
Route::get('/pembayaran/admin/update/{id}', [PembayaranController::class, 'edit'])->name('edit_pembayaran_admin');
Route::put('/pembayaran/admin/update/{id}', [PembayaranController::class, 'update'])->name('update_pembayaran_admin');
Route::delete('/pembayaran/delete/{id}', [PembayaranController::class, 'destroy'])->name('delete_pembayaran_admin');

