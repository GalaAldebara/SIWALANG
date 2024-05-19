<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function agenda()
    {
        $header = (object) [
            'title' => 'Agenda Kegiatan',
            'list' => ['Beranda', 'Agenda Kegiatan']
        ];

        return view('warga.AgendaKegiatan.index', ['header' => $header]);
    }
}
