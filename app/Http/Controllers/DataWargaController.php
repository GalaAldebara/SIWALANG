<?php

namespace App\Http\Controllers;

use App\Models\DataDiriModel;
use Illuminate\Http\Request;
use App\Models\DataDiri;

class DataWargaController extends Controller
{
    public function index()
    {

        $header = (object) [
            'title' => 'Agenda Kegiatan',
            'list' => ['Beranda', 'Agenda Kegiatan']
        ];

        $dataDiri = DataDiriModel::all();
        return view('RW.DataWarga.index', ['dataDiri' => $dataDiri, 'header' => $header]);
    }
}
