<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RWDataTamuController extends Controller
{
    public function index()
    {
        $header = (object) [
            'title' => 'Pelaporan Tamu',
            'list' => ['Beranda', 'Pelaporan Tamu']
        ];

        return view('warga.PelaporanTamu.index', ['header' => $header]);
    }

    // public function list(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $pelaporan = PelaporanTamuModel::select('noTamu', 'tanggal_bertamu', 'nama_tamu')->get();
    //         return DataTables::of($pelaporan)->make(true);
    //     }
    // }

    public function daftarPelaporanTamu()
    {
        return view('warga.PelaporanTamu.pelaporanTamu', compact('pelaporanTamu'));
    }
}
