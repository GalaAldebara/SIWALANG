<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PelaporanTamu;
use Illuminate\Support\Facades\Auth;

class PelaporanTamuController extends Controller
{
    public function index()
    {
        $pelaporanTamu = PelaporanTamu::all();
        return view('warga.PelaporanTamu.viewPelaporanTamu', compact('pelaporanTamu'));
    }

    public function create()
    {
        return view('warga.PelaporanTamu.formPelaporanTamu');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_tuan_rumah' => 'required|string|max:100',
            'no_ktp_tamu' => 'required|string|max:50',
            'nama_tamu' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string|max:255',
            'tanggal_bertamu' => 'required|date',
            'keterangan_keperluan' => 'required|string',
        ]);

        $data = $request->all();
        $data['nik'] = Auth::user()->nik; // Mengisi nik dengan nik user yang sedang login

        PelaporanTamu::create($data);

        return redirect()->route('daftar_pelaporan_tamu')
            ->with('success', 'Pelaporan tamu berhasil disimpan.');
    }

    public function showForm()
    {
        return view('warga.PelaporanTamu.formPelaporanTamu');
    }

    public function daftarPelaporanTamu()
    {
        $pelaporanTamu = PelaporanTamu::all();
        return view('warga.PelaporanTamu.pelaporanTamu', compact('pelaporanTamu'));
    }
}
