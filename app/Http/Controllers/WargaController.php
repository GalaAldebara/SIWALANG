<?php

namespace App\Http\Controllers;

use App\Models\PengaduanModel;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}
