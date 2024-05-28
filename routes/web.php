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
use App\Http\Controllers\DataPengaduanController;
use App\Http\Controllers\DataTamuController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PelaporanTamuController;
use App\Http\Controllers\UserController;

Route::get('/coba', function () {
    return view('rt.DataWarga.index');
});

// pengaduan
Route::group(['prefix' => 'pengaduan'], function () {
    Route::get('/', [PengaduanController::class, 'riwayat']);
    Route::post('/list', [PengaduanController::class, 'list'])->name('pengaduan_list');
    Route::get('/form', [PengaduanController::class, 'form']);
    Route::post('/', [PengaduanController::class, 'store']);
});

// Pelaporan Tamu (Warga)
Route::group(['prefix' => 'pelaporan-tamu'], function () {
    Route::get('/', [PelaporanTamuController::class, 'riwayat'])->name('riwayat');
    Route::post('/list', [PelaporanTamuController::class, 'list'])->name('pelaporan_list');
    Route::get('/form', [PelaporanTamuController::class, 'form']);
    Route::post('/', [PelaporanTamuController::class, 'store']);
    Route::get('/{id}', [PelaporanTamuController::class, 'show'])->name('rincian');
});

//kegiatan
Route::group(['prefix' => 'kegiatan'], function () {
    Route::get('/agenda', [KegiatanController::class, 'agenda']);
    Route::post('/agenda/list', [KegiatanController::class, 'list']);
    Route::get('/agenda/rincian', [KegiatanController::class, 'rincian']);
    Route::get('/arsip', [KegiatanController::class, 'arsip']);
});

// profil Warga (data diri)
Route::group(['prefix' => 'data_diri'], function () {
    Route::get('/', [DataDiriController::class, 'index']);
    Route::get('/form_satu', [DataDiriController::class, 'formSatu'])->name('form.satu');
    Route::post('/form_satu', [DataDiriController::class, 'storeSatu'])->name('store.form-satu');
    Route::get('/form_dua', [DataDiriController::class, 'formDua'])->name('form.dua');
    Route::post('/form_dua', [DataDiriController::class, 'storeDua'])->name('store.form-dua');
    Route::get('/form_password', [DataDiriController::class, 'formPassword']);
    Route::post('/', [DataDiriController::class, 'update'])->name('update.username.password');
});

// Data Warga (RT)
Route::group(['prefix' => 'data_warga'], function () {
    Route::get('/', [UserController::class, 'index'])->name('data-warga');
    Route::post('/list-akun', [UserController::class, 'listAkun'])->name('akun_list');
    Route::post('/list-warga', [UserController::class, 'listWarga'])->name('warga_list');
    Route::get('/tambah', [UserController::class, 'add']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show'])->name('rincian.warga');
    Route::get('/akun/{id}', [UserController::class, 'showAkun'])->name('rincian.akun');
    Route::get('/edit/{id}', [UserController::class, 'edit']);
    Route::post('/{id}', [UserController::class, 'update']);
    Route::post('/edit_status/{id}', [UserController::class, 'editStatus'])->name('edit_status');
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

// Data Tamu (RT)
Route::group(['prefix' => 'data_tamu'], function () {
    Route::get('/', [DataTamuController::class, 'index']);
    Route::post('/list', [DataTamuController::class, 'list'])->name('tamu_list');
    // Route::get('/form', [DataTamuController::class, 'form']);
    // Route::post('/', [DataTamuController::class, 'store']);
    Route::get('/{id}', [DataTamuController::class, 'show'])->name('rincian.data-tamu');
});

// Data pengaduan
Route::group(['prefix' => 'data_pengaduan'], function () {
    Route::get('/', [DataPengaduanController::class, 'index']);
    Route::post('/', [DataPengaduanController::class, 'list'])->name('data.pengaduan_list');
    Route::get('/{id}', [DataPengaduanController::class, 'show'])->name('rincian.data-pengaduan');
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

Route::get('/formlengkapi', function () {
    return view('warga.data diri.formLengkapi');
});

Route::get('/uploadberkas', function () {
    return view('warga.data diri.formUploadBerkas');
});

Route::get('/rinciandatadiri', function () {
    return view('warga.data diri.rincianDataDiri');
});

Route::get('/formgantipassword', function () {
    return view('warga.data diri.formGantiPassword');
});
