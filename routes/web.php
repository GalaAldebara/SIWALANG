<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RTController;
use App\Http\Controllers\RWController;
use Illuminate\Routing\RouteRegistrar;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\DataDiriController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PelaporanTamuController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/pengaduan/form', function () {
    return view('warga.pengaduan.form');
});
Route::get('/pengaduan/form2', function () {
    return view('warga.pengaduan.pengaduanform2');
});

// Route::get('/pengaduan/index', function () {
//     return view('warga.Pengaduan.index');
// });

Route::get('/pengaduan/index', [PengaduanController::class, 'index'])->name('pengaduan.index');

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

Route::get('/struktur', function () {
    return view('warga.strukturKepemimpinan.strukturKepemimpinan');
});

Route::get('/detailstruktur', function () {
    return view('warga.strukturKepemimpinan.detailStruktur');
});

Route::get('/arsipkegiatan', function () {
    return view('warga.arsip kegiatan.arsipKegiatan');
});

// Route::get('/formpelaporan', function () {
//     return view('warga.pelaporan tamu.formPelaporanTamu');
// });

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

// Pelaporan Tamu
Route::get('/form_pelaporan_tamu', [PelaporanTamuController::class, 'showForm'])->name('formPelaporanTamu');
Route::post('/store_pelaporan_tamu', [PelaporanTamuController::class, 'store'])->name('store_pelaporan_tamu');
Route::get('/daftar_pelaporan_tamu', [PelaporanTamuController::class, 'daftarPelaporanTamu'])->name('daftar_pelaporan_tamu');

// Data Diri
Route::get('/form_data_diri', [DataDiriController::class, 'createForm'])->name('form_data_diri');
Route::post('/store_data_diri', [DataDiriController::class, 'store'])->name('store_data_diri');
Route::get('/data_diri', [DataDiriController::class, 'index'])->name('data_diri.index');
