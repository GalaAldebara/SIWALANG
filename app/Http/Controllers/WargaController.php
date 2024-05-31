<?php

namespace App\Http\Controllers;

use App\Models\PengaduanModel;
use Auth;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        $level_id = Auth::user()->level_id;
        return view('warga', ['level_id' => $level_id]);
    }
}
