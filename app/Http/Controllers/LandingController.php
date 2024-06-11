<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataDiriModel;
use Illuminate\Support\Facades\Auth;
use DB;

class LandingController extends Controller
{
    public function index()
    {
        $maleCount = DB::table('data_diri')->where('jenis_kelamin', 'Laki-laki')->count();
        $femaleCount = DB::table('data_diri')->where('jenis_kelamin', 'Perempuan')->count();
        $familyCount = DB::table('data_diri')->where('hubungan_kk', 'kepala keluarga')->count();
        $totalCount = DB::table('data_diri')->count();

        return view('landing', compact('maleCount', 'femaleCount', 'familyCount', 'totalCount'));
    }
}
