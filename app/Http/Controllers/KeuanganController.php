<?php

namespace App\Http\Controllers;

use App\Models\KeuanganModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class KeuanganController extends Controller
{

    public function index()
    {
        $header = (object) [
            'title' => 'Keuangan',
            'list' => ['Beranda', 'Keuangan']
        ];

        $users = KeuanganModel::all();
        return view('RW.Keuangan.index', ['users' => $users, 'header' => $header]);
    }

    public function keuangan_list(Request $request)
    {
        if ($request->ajax()) {
            $keuangan = KeuanganModel::select('keuangan_id', 'tanggal_kegiatan', 'kategori', 'keterangan', 'jumlah', 'total')->get();
            return DataTables::of($keuangan)->make(true);
        }
    }

    public function form()
    {
        $header = (object) [
            'title' => 'Keuangan',
            'list' => ['Beranda', 'Keuangan', 'Formulir Keuangan']
        ];

        $users = KeuanganModel::all();

        return view('RW.Keuangan.tambah_keuangan', ['users' => $users, 'header' => $header]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|string|max:50',
            'tanggal_kegiatan' => 'required|date',
            'kategori' => 'required|in:Pemasukan,Pengeluaran',
            'keterangan' => 'required|string|max:255',
            'jumlah' => 'required|numeric',
        ]);

        $latestEntry = KeuanganModel::latest()->first();
        $previousTotal = $latestEntry ? $latestEntry->total : 0;
        $jumlah = $validatedData['jumlah'];

        if ($validatedData['kategori'] == 'Pengeluaran') {
            $jumlah = -$jumlah;
        }

        $newTotal = $previousTotal + $jumlah;

        KeuanganModel::create([
            'nik' => $validatedData['nik'],
            'tanggal_kegiatan' => $validatedData['tanggal_kegiatan'],
            'kategori' => $validatedData['kategori'],
            'keterangan' => $validatedData['keterangan'],
            'jumlah' => $validatedData['jumlah'],
            'total' => $newTotal,
        ]);

        return redirect()->route('index')->with('success', 'Data keuangan berhasil disimpan.');
    }

    public function edit($keuangan_id)
    {
        $keuangan = KeuanganModel::findOrFail($keuangan_id);
        return view('RW.Keuangan.edit', compact('keuangan'));
    }
}
