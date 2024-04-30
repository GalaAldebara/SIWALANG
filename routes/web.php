<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pengaduan', function () {
    return view('warga.Pengaduan.PengaduanForm');
});
