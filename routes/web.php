<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RTController;
use App\Http\Controllers\RWController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WargaController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/pengaduan/form', function () {
    return view('warga.Pengaduan.PengaduanForm');
});

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:1']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:2']], function () {
        Route::resource('RW', RTController::class);
    });
    Route::group(['middleware' => ['cek_login:3']], function () {
        Route::resource('RT', RWController::class);
    });
    Route::group(['middleware' => ['cek_login:4']], function () {
        Route::resource('warga', WargaController::class);
    });
});
