<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pengaduan/index', function () {
    return view('warga.pengaduan.index');
});
