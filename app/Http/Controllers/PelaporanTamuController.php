<?php

namespace App\Http\Controllers;

use App\Models\PelaporanTamuModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class PelaporanTamuController extends Controller
{
    public function riwayat()
    {
        $header = (object) [
            'title' => 'Pelaporan Tamu',
            'list' => ['Beranda', 'Pelaporan Tamu']
        ];

        return view('warga.PelaporanTamu.index', ['header' => $header]);
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $pelaporan = PelaporanTamuModel::select('noTamu', 'tanggal_bertamu', 'nama_tamu')
                ->where('nik', auth()->user()->nik)
                ->get();
            return DataTables::of($pelaporan)->make(true);
        }
    }

    public function form()
    {
        $header = (object) [
            'title' => 'Pelaporan Tamu',
            'list' => ['Beranda', 'Pelaporan Tamu', 'Formulir Pelaporan Tamu']
        ];

        return view('warga.pelaporanTamu.form', ['header' => $header]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_tuan_rumah' => 'required|string|max:50',
            'no_ktp_tamu' => 'required|string|size:16',
            'nama_tamu' => 'required|string|max:50',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string|max:255',
            'tanggal_bertamu' => 'required|date',
            'keterangan_keperluan' => 'required|string',
            'foto_ktp_tamu' => 'required|image|max:2000'
        ]);

        $file = $request->file('foto_ktp_tamu');
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();

        $timestamp = Carbon::now()->format('Ymd_His');
        $nama_file = pathinfo($originalName, PATHINFO_FILENAME) . '_' . $timestamp . '.' . $extension;

        $file->move(public_path('img/pelaporan_tamu'), $nama_file);

        $data = $request->all();
        $data['nik'] = Auth::user()->nik;
        $data['foto_ktp_tamu'] = $nama_file;

        PelaporanTamuModel::create($data);

        return redirect()->route('riwayat')
            ->with('success', 'Pelaporan tamu berhasil disimpan.');
    }

    public function show(string $id)
    {
        $pelaporan = PelaporanTamuModel::find($id);

        $header = (object) [
            'title' => 'Pelaporan Tamu',
            'list' => ['Beranda', 'Pelaporan Tamu', 'Rincian Tamu']
        ];

        return view('warga.PelaporanTamu.show', ['header' => $header, 'pelaporan' => $pelaporan]);
    }

    public function daftarPelaporanTamu()
    {
        $pelaporanTamu = PelaporanTamuModel::all();
        return view('warga.PelaporanTamu.pelaporanTamu', compact('pelaporanTamu'));
    }
}
