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

Route::get('/gg', function () {
    return view('warga.PelaporanTamu.index2');
});

// pengaduan
Route::group(['prefix' => 'pengaduan'], function () {
    Route::get('/', [PengaduanController::class, 'riwayat']);
    Route::post('/list', [PengaduanController::class, 'list'])->name('pengaduan_list');
    Route::get('/form', [PengaduanController::class, 'form']);
    Route::post('/', [PengaduanController::class, 'store']);
});

// Data Diri
// Route::group(['prefix' => 'data-diri'], function () {
Route::get('/form_data_diri', [DataDiriController::class, 'createForm'])->name('form_data_diri');
Route::post('/store_data_diri', [DataDiriController::class, 'store'])->name('store_data_diri');
Route::get('/data_diri', [DataDiriController::class, 'index'])->name('data_diri.index');
// });

// Pelaporan Tamu
Route::group(['prefix' => 'pelaporan'], function () {
    Route::get('/form_pelaporan_tamu', [PelaporanTamuController::class, 'showForm'])->name('formPelaporanTamu');
    Route::post('/store_pelaporan_tamu', [PelaporanTamuController::class, 'store'])->name('store_pelaporan_tamu');
    Route::get('/daftar_pelaporan_tamu', [PelaporanTamuController::class, 'daftarPelaporanTamu'])->name('daftar_pelaporan_tamu');
});

// Login
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



Route::get('/formbansos', function () {
    return view('warga.pengajuan bansos.formPengajuanBansos');
});

Route::get('/formlanjutan', function () {
    return view('warga.pengajuan bansos.form2PengajuanBansos');
});

Route::get('/daftarbansos', function () {
    return view('warga.pengajuan bansos.daftarDataBansos');
});
