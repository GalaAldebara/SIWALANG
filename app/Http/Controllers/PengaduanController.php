<?php

namespace App\Http\Controllers;

use App\Models\PengaduanModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class PengaduanController extends Controller
{
    public function riwayat()
    {
        $header = (object) [
            'title' => 'Pengaduan',
            'list' => ['Beranda', 'Pengaduan']
        ];

        $users = UserModel::all();

        return view('warga.pengaduan.index', ['users' => $users, 'header' => $header]);
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $pengaduans = PengaduanModel::select('tanggal_pengaduan', 'keluhan', 'bukti')->get();
            return DataTables::of($pengaduans)->make(true);
        }
    }

    public function form()
    {
        $header = (object) [
            'title' => 'Pengaduan',
            'list' => ['Beranda', 'Pengaduan', 'Formulir Pengaduan']
        ];

        $users = UserModel::all();

        return view('warga.pengaduan.form', ['users' => $users, 'header' => $header]);
    }

    public function store(Request $request)
    {
        $nik = Auth::user()->nik;

        $request->validate([
            'nama' => 'required|string',
            'tanggal_pengaduan' => 'required|date',
            'keluhan' => 'required|string|max:225',
            'bukti' => 'required|image|max:2048',
        ], [
            'bukti.required' => 'File bukti harus diunggah.',
            'bukti.image' => 'File bukti harus berupa gambar.',
            'bukti.max' => 'Ukuran file bukti tidak boleh lebih dari 2 MB.',
        ]);

        $nama_file = $request->file('bukti')->getClientOriginalName();

        $request->file('bukti')->move(public_path('img/bukti-pengaduan'), $nama_file);

        PengaduanModel::create([
            'nik' => $nik,
            'nama' => $request->nama,
            'tanggal_pengaduan' => $request->tanggal_pengaduan,
            'keluhan' => $request->keluhan,
            'bukti' => $nama_file,
        ]);

        return redirect('/pengaduan')->with('success', 'Pengaduan berhasil');
    }
}
