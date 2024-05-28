<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RWDataTamuController extends Controller
{
    public function daftarPelaporanTamu()
    {
        return view('warga.PelaporanTamu.pelaporanTamu', compact('pelaporanTamu'));
    }
}
