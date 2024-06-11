<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataDiriModel;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $header = (object) [
            'title' => 'Data Diri',
            'list' => ['Beranda', 'Data Diri']
        ];

        $user = Auth::user();
        $dataDiri = $user->dataDiri;

        // Statistik
        $lakiLakiCount = DataDiriModel::where('jenis_kelamin', 'Laki-laki')->count();
        $perempuanCount = DataDiriModel::where('jenis_kelamin', 'Perempuan')->count();
        $keluargaCount = DataDiriModel::where('hubungan_kk', 'kepala keluarga')->count();
        $pendudukCount = DataDiriModel::count();

        return view('admin', compact('header', 'user', 'dataDiri', 'lakiLakiCount', 'perempuanCount', 'keluargaCount', 'pendudukCount'));
    }

    public function show()
    {
        return view('admin.formGanti');
    }
}
