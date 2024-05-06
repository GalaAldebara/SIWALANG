<?php

use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/struktur', function () {
    return view('warga.strukturKepemimpinan.strukturKepemimpinan');
});

Route::get('/detailstruktur', function () {
    return view('warga.strukturKepemimpinan.detailStruktur');
});

Route::get('/arsipkegiatan', function () {
    return view('warga.arsip kegiatan.arsipKegiatan');
});

Route::get('formpelaporan', function () {
    return view('warga.pelaporan tamu.formPelaporanTamu');
});

// Route::get('riwayatpelaporan', function () {
//     return view('warga.pelaporan tamu.riwayatPelaporanTamu');
// });

// Route::get('rincianriwayat', function () {
//     return view('warga.pelaporan tamu.rincianRiwayatPelaporanTamu');
// });