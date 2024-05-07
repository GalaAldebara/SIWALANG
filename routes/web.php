<?php

use Illuminate\Routing\RouteRegistrar;
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

Route::get('/struktur', function () {
    return view('warga.strukturKepemimpinan.strukturKepemimpinan');
});

Route::get('/detailstruktur', function () {
    return view('warga.strukturKepemimpinan.detailStruktur');
});

Route::get('/arsipkegiatan', function () {
    return view('warga.arsip kegiatan.arsipKegiatan');
});

Route::get('/formpelaporan', function () {
    return view('warga.pelaporan tamu.formPelaporanTamu');
});

Route::get('/riwayatpelaporan', function () {
    return view('warga.pelaporan tamu.riwayatPelaporanTamu');
});

Route::get('/rincianriwayat', function () {
    return view('warga.pelaporan tamu.rincianRiwayatPelaporanTamu');
});

Route::get('/formpengajuan', function () {
    return view('warga.pengajuan surat pengantar.formPengajuan');
});

Route::get('/riwayatpengajuansetuju', function () {
    return view('warga.pengajuan surat pengantar.riwayatPengajuanSetuju');
});

Route::get('/riwayatpengajuanwaiting', function () {
    return view('warga.pengajuan surat pengantar.riwayatPengajuanWaiting');
});

Route::get('/rinciansurat', function () {
    return view('warga.pengajuan surat pengantar.rincianSurat');
});

