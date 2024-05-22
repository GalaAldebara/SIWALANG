<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexRT()
    {
        $header = (object) [
            'title' => 'Data Warga',
            'list' => ['Beranda', 'Data Warga']
        ];

        return view('rt.DataWarga.index', ['header' => $header]);
    }
}
