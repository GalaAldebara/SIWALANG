<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RTController;
use App\Http\Controllers\RWController;
use Illuminate\Routing\RouteRegistrar;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\DataDiriController;
use App\Http\Controllers\DataTamuController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\DataWargaController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\RWDataTamuController;
use App\Http\Controllers\RW_DataTamuController;
use App\Http\Controllers\DataPengaduanController;
use App\Http\Controllers\NotifController;
use App\Http\Controllers\PelaporanTamuController;
use App\Http\Controllers\StrukturKepemimpinanController;
use App\Http\Controllers\PenerimaBansosController;
use App\Http\Controllers\PengajuanBansosController;


Route::get('/landing', function () {
    return view('landingPage');
});

Route::get('/DataWarga', function () {
    return view('RW.DataWarga.index');
});

// WARGA - pengaduan
Route::group(['prefix' => 'pengaduan'], function () {
    Route::get('/', [PengaduanController::class, 'riwayat']);
    Route::post('/list', [PengaduanController::class, 'list'])->name('pengaduan_list');
    Route::get('/form', [PengaduanController::class, 'form']);
    Route::post('/', [PengaduanController::class, 'store']);
});

// WARGA - Pelaporan Tamu
Route::group(['prefix' => 'pelaporan-tamu'], function () {
    Route::get('/', [PelaporanTamuController::class, 'riwayat'])->name('riwayat');
    Route::post('/list', [PelaporanTamuController::class, 'list'])->name('pelaporan_list');
    Route::get('/form', [PelaporanTamuController::class, 'form']);
    Route::post('/', [PelaporanTamuController::class, 'store']);
    Route::get('/{id}', [PelaporanTamuController::class, 'show'])->name('rincian');
});

// WARGA - kegiatan
Route::group(['prefix' => 'kegiatan'], function () {
    Route::get('/agenda', [KegiatanController::class, 'agenda']);
    Route::post('/agenda/list', [KegiatanController::class, 'list']);
    Route::get('/agenda/rincian', [KegiatanController::class, 'rincian']);
    Route::get('/arsip', [KegiatanController::class, 'arsip']);
});

// Warga - Data diri
Route::group(['prefix' => 'data_diri'], function () {
    Route::get('/', [DataDiriController::class, 'index']);
    Route::get('/form_satu', [DataDiriController::class, 'formSatu'])->name('form.satu');
    Route::post('/form_satu', [DataDiriController::class, 'storeSatu'])->name('store.form-satu');
    Route::get('/form_dua', [DataDiriController::class, 'formDua'])->name('form.dua');
    Route::post('/form_dua', [DataDiriController::class, 'storeDua'])->name('store.form-dua');
    Route::get('/form_password', [DataDiriController::class, 'formPassword']);
    Route::post('/form_password', [AuthController::class, 'prosesChangePassword'])->name('update.username.password');
    Route::get('/chart', [DataDiriController::class, 'showChart']);
    Route::get('/chart/rt', [DataDiriController::class, 'getRtData']);
});

// Warga - Bansos
Route::group(['prefix' => 'pengajuan_bansos'], function () {
    Route::get('/', [PengajuanBansosController::class, 'index']);
    Route::post('/list', [PengajuanBansosController::class, 'list'])->name('list.pengajuan_bansos');
    Route::get('/form', [PengajuanBansosController::class, 'form']);
    Route::post('/', [PengajuanBansosController::class, 'store']);
});

// RT - Notifikasi
Route::group(['prefix' => 'rt_notifikasi'], function () {
    Route::get('/', [NotifController::class, 'index']);
    Route::post('/update-status/{id_notif}', [NotifController::class, 'updateStatus']);
    Route::get('/bansos/{id}', [NotifController::class, 'verifBansos']);
    Route::post('bansos/{id}/update', [NotifController::class, 'updateBansos'])->name('bansos.update');
});

// RT dan RW - Penerima Bansos
Route::group(['prefix' => 'penerima_bansos'], function () {
    // RT
    Route::get('/', [PenerimaBansosController::class, 'index']);
    Route::post('/pemohon', [PenerimaBansosController::class, 'listPemohon'])->name('pemohon_list');
    Route::post('/penerima', [PenerimaBansosController::class, 'listPenerima'])->name('penerima_list');
    Route::post('/hitung-skor', [PenerimaBansosController::class, 'perhitunganSkor'])->name('hitung.skor');
    Route::post('/perankingan', [PenerimaBansosController::class, 'perankingan'])->name('perankingan');
    // RW
    Route::get('/semua', [PenerimaBansosController::class, 'dataPenerima']);
    Route::post('/semua/list', [PenerimaBansosController::class, 'listsemuaPenerima'])->name('data_penerima_list');
    Route::get('/{id}', [PenerimaBansosController::class, 'show']);
    Route::get('/semua/{id}', [PenerimaBansosController::class, 'showData']);
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
    Route::get('/form', [DataTamuController::class, 'form']);
    Route::post('/', [DataTamuController::class, 'store']);
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
        Route::resource('RW', RWController::class);
    });
    Route::group(['middleware' => ['cek_login:3']], function () {
        Route::resource('RT', RTController::class);
    });
    Route::group(['middleware' => ['cek_login:4']], function () {
        Route::resource('warga', WargaController::class);
    });
});

// Route::group(['prefix' => 'pelaporan-tamu'], function () {
//     Route::get('/', [PelaporanTamuController::class, 'riwayat'])->name('riwayat');
//     Route::post('/list', [PelaporanTamuController::class, 'list'])->name('pelaporan_list');
//     Route::get('/form', [PelaporanTamuController::class, 'form']);
//     Route::post('/', [PelaporanTamuController::class, 'store']);
//     Route::get('/{id}', [PelaporanTamuController::class, 'show'])->name('rincian');
//     // Route::get('/show', [PelaporanTamuController::class, 'lihat']);
// });

// Route::group(['prefix' => 'pengaduan'], function () {
//     Route::get('/', [PengaduanController::class, 'riwayat']);
//     Route::post('/list', [PengaduanController::class, 'list'])->name('pengaduan_list');
//     Route::get('/form', [PengaduanController::class, 'form']);
//     Route::post('/', [PengaduanController::class, 'store']);
// });

// RW - Data Tamu Warga
// Route::group(['prefix' => 'data_tamu'], function () {
//     Route::get('/', [RWDataTamuController::class, 'index']);
//     Route::post('/tambah', [RWDataTamuController::class, 'list'])->name('keuangan_list');
//     Route::get('/rincian', [RWDataTamuController::class, 'form']);
//     Route::post('/', [RWDataTamuController::class, 'store']);
// });

// RW - Keuangan
Route::group(['prefix' => 'RW-Keuangan'], function () {
    Route::get('/', [KeuanganController::class, 'index'])->name('index');
    Route::post('/list', [KeuanganController::class, 'keuangan_list'])->name('keuangan_list');
    Route::get('/form', [KeuanganController::class, 'form']);
    Route::post('/', [KeuanganController::class, 'store']);
    Route::get('/{keuangan_id}/edit', [KeuanganController::class, 'edit'])->name('keuangan_edit');
    Route::get('/diagram', [KeuanganController::class, 'showDiagram'])->name('keuangan.diagram');
    // Route::get('/grafik', [KeuanganController::class, 'showGrafik'])->name('keuangan.grafik');
    Route::get('/grafik', [KeuanganController::class, 'showGrafik']);
});

// RW - Data Warga
Route::group(['prefix' => 'RW-DataWarga'], function () {
    Route::get('/', [DataWargaController::class, 'index'])->name('RW.DataWarga.index');
    Route::post('/', [DataWargaController::class, 'list'])->name('RW.warga_list');
    Route::get('/{id}', [DataWargaController::class, 'show'])->name('RW.rincian.warga');
});

// RW - kegiatan
Route::group(['prefix' => 'data'], function () {
    Route::get('/kegiatan', [KegiatanController::class, 'index']);
    Route::post('/kegiatan/list', [KegiatanController::class, 'listData'])->name('kegiatan_list');
    Route::get('/kegiatan/form', [KegiatanController::class, 'form']);
    Route::get('/kegiatan/rincian', [KegiatanController::class, 'rincian']);
    Route::get('/kegiatan/show/{id}', [KegiatanController::class, 'show']);
    Route::post('/kegiatan', [KegiatanController::class, 'store']);
    Route::get('/kegiatan/form/{id}', [KegiatanController::class, 'formDokumen']);
    Route::post('/kegiatan/{id}', [KegiatanController::class, 'storeDokumen']);
    Route::delete('/kegiatan/delete/{id}', [KegiatanController::class, 'destroy']);
});

// DomPDF
Route::get('generate-pdf', [PdfController::class, 'showPreview'])->name('generate-pdf');
Route::get('show-pdf', [PdfController::class, 'showPDF'])->name('show-pdf');
Route::get('download-pdf', [PdfController::class, 'downloadPDF'])->name('download-pdf');

// StrukturKepemimpinan
Route::get('/struktur-kepemimpinan', [StrukturKepemimpinanController::class, 'index'])->name('struktur.kepemimpinan');
Route::get('/struktur-kepemimpinan/rt', [StrukturKepemimpinanController::class, 'rt'])->name('struktur.rt');
Route::get('/struktur-kepemimpinan/rw', [StrukturKepemimpinanController::class, 'rw'])->name('struktur.rw');

// Admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/formRT', [AdminController::class, 'show']);
});


// Route::get('/struktur', function () {
//     return view('warga.strukturKepemimpinan.strukturKepemimpinan');
// });

// Route::get('/detailstruktur', function () {
//     return view('warga.strukturKepemimpinan.detailStruktur');
// });

// Route::get('/arsipkegiatan', function () {
//     return view('warga.arsip kegiatan.arsipKegiatan');
// });

// Route::get('/formpelaporan', function () {
//     return view('warga.pelaporan tamu.formPelaporanTamu');
// });

// Route::get('/riwayatpelaporan', function () {
//     return view('warga.pelaporan tamu.riwayatPelaporanTamu');
// });

// Route::get('/rincianriwayat', function () {
//     return view('warga.pelaporan tamu.rincianRiwayatPelaporanTamu');
// });

// Route::get('/formpengajuan', function () {
//     return view('warga.pengajuan surat pengantar.formPengajuan');
// });

// Route::get('/riwayatpengajuansetuju', function () {
//     return view('warga.pengajuan surat pengantar.riwayatPengajuanSetuju');
// });

// Route::get('/riwayatpengajuanwaiting', function () {
//     return view('warga.pengajuan surat pengantar.riwayatPengajuanWaiting');
// });

// Route::get('/rinciansurat', function () {
//     return view('warga.pengajuan surat pengantar.rincianSurat');
// });

// Route::get('/formbansos', function () {
//     return view('warga.pengajuan bansos.formPengajuanBansos');
// });

// Route::get('/formlanjutan', function () {
//     return view('warga.pengajuan bansos.form2PengajuanBansos');
// });

// Route::get('/daftarbansos', function () {
//     return view('warga.pengajuan bansos.daftarDataBansos');
// });

// Route::get('/formlengkapi', function () {
//     return view('warga.data diri.formLengkapi');
// });

// Route::get('/uploadberkas', function () {
//     return view('warga.data diri.formUploadBerkas');
// });

// Route::get('/rinciandatadiri', function () {
//     return view('warga.data diri.rincianDataDiri');
// });

// Route::get('/formgantipassword', function () {
//     return view('warga.data diri.formGantiPassword');
// });

// Route::get('/daftarkegiatan', function () {
//     return view('rw.arsip kegiatan - rw.tabelKegiatan');
// });

// Route::get('/rinciankegiatan', function () {
//     return view('rw.arsip kegiatan - rw.rincianKegiatan');
// });

// Route::get('/formtambahkegiatan', function () {
//     return view('rw.arsip kegiatan - rw.formTambahKegiatan');
// });

// Route::get('/formuploadkegiatan', function () {
//     return view('rw.arsip kegiatan - rw.formUploadKegiatan');
// });

// Route::get('/grafik', function () {
//     return view('warga.coba-praktikum');
// });

// Route::get('/formganti', function () {
//     return view('admin.formGanti');
// });

// Route::get('landingpage', function () {
//     return view('warga.Landing.landing');
// });
