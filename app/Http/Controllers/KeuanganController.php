<?php

namespace App\Http\Controllers;

use App\Models\KeuanganModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use DB;

class KeuanganController extends Controller
{

    public function index()
    {
        $header = (object) [
            'title' => 'Keuangan',
            'list' => ['Beranda', 'Keuangan']
        ];

        $pemasukan = KeuanganModel::where('kategori', 'Pemasukan')->sum('jumlah');
        $pengeluaran = KeuanganModel::where('kategori', 'Pengeluaran')->sum('jumlah');

        $users = KeuanganModel::all();
        return view('RW.Keuangan.index', ['users' => $users, 'header' => $header, 'pemasukan' => $pemasukan, 'pengeluaran' => $pengeluaran]);
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

    public function showDiagram()
    {
        $header = (object) [
            'title' => 'Diagram Grafik',
            'list' => ['Beranda', 'Diagram']
        ];

        $pemasukan = KeuanganModel::where('kategori', 'Pemasukan')->sum('jumlah');
        $pengeluaran = KeuanganModel::where('kategori', 'Pengeluaran')->sum('jumlah');

        // For the sake of example, let's assume we have multiple entries for pemasukan and pengeluaran for different labels
        $labels = ['Pemasukan 1', 'Pemasukan 2', 'Pengeluaran 1', 'Pengeluaran 2'];
        $pemasukanData = [200000, 300000]; // example data
        $pengeluaranData = [150000, 250000]; // example data

        return view('RW.Keuangan.diagram', [
            'header' => $header,
            'labels' => $labels,
            'pemasukanData' => $pemasukanData,
            'pengeluaranData' => $pengeluaranData,
            'pemasukan' => $pemasukan,
            'pengeluaran' => $pengeluaran
        ]);
    }

    public function showGrafik()
    { {
            $keuangan = DB::table('keuangan')->get();

            $data = $keuangan->groupBy('tanggal_kegiatan')->map(function ($item, $key) {
                return [
                    'tanggal' => $key,
                    'pemasukan' => $item->where('kategori', 'Pemasukan')->sum('jumlah'),
                    'pengeluaran' => $item->where('kategori', 'Pengeluaran')->sum('jumlah'),
                ];
            })->values();

            return view('RW.Keuangan.grafik', compact('data'));
        }
    }
}
