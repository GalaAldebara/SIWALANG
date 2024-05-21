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

    public function rincian()
    {
        $header = (object) [
            'title' => 'Agenda Kegiatan',
            'list' => ['Beranda', 'Agenda Kegiatan', 'Rincian Agenda Kegiatan']
        ];

        return view('warga.AgendaKegiatan.rincian', ['header' => $header]);
    }

    public function arsip()
    {
        $header = (object) [
            'title' => 'Agenda Kegiatan',
            'list' => ['Beranda', 'Arsip Kegiatan']
        ];

        return view('warga.ArsipKegiatan.index', ['header' => $header]);
    }
}
