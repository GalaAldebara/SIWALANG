<?php

namespace App\Http\Controllers;

use App\Models\PengaduanModel;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        $users = PengaduanModel::all();

        return view('warga.pengaduan.index', ['users' => $users]);
    }
}
