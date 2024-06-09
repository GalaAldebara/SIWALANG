<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserModel;

class StrukturKepemimpinanController extends Controller
{
    public function rt()
    {
        $header = (object) [
            'title' => 'Struktur Kepemimpinan',
            'list' => ['Beranda', 'Struktur Kepemimpinan']
        ];

        $users = UserModel::where('level_id', 3)->get();
        $nama_rt = $users->first()->nama ?? 'RT';

        return view('Dashboard.StrukturKepemimpinan.dataDiriRT', [
            'users' => $users,
            'header' => $header,
            'nama_rt' => $nama_rt
        ]);
    }

    public function rw()
    {
        $header = (object) [
            'title' => 'Struktur Kepemimpinan',
            'list' => ['Beranda', 'Struktur Kepemimpinan']
        ];

        $users = UserModel::where('level_id', 2)->get();
        $nama_rw = $users->first()->nama ?? 'RW';

        return view('Dashboard.StrukturKepemimpinan.dataDiriRW', [
            'users' => $users,
            'header' => $header,
            'nama_rw' => $nama_rw
        ]);
    }
}
