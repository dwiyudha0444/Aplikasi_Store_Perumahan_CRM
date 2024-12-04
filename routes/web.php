<?php

use App\Http\Controllers\admin\DashboardAdminController;
use App\Http\Controllers\admin\DenahPerumController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingpageController;


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

//auth
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login_proses', [LoginController::class, 'login_proses'])->name('login_proses');
Route::get('/register', [RegisterController::class, 'index'])->name('form_register');
Route::post('/register', [RegisterController::class, 'register_proses'])->name('register');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//dashboard admin
Route::get('/dashboard_admin', [DashboardAdminController::class, 'index'])->name('dashboard_admin');

//denah perum
Route::get('/denah_perum', [DenahPerumController::class, 'index'])->name('denah_perum');
Route::get('/form_bangunan', [DenahPerumController::class, 'create'])->name('form_bangunan');
