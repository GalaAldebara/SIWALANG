<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pengaduan/form', function () {
    return view('warga.pengaduan.PengaduanForm');
});

Route::get('/pengaduan/index', function () {
    return view('warga.pengaduan.index');
});

Route::get('/landing', function () {
    return view('warga.Landing.landing');
});

Route::get('/pelaporan', function () {
    return view('warga.Pelaporan.PelaporanTamu');
});
