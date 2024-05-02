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
