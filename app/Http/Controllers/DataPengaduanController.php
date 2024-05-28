<?php

namespace App\Http\Controllers;

use App\Models\PengaduanModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DataPengaduanController extends Controller
{
    public function index()
    {
        $header = (object) [
            'title' => 'Pengaduan',
            'list' => ['Beranda', 'Pengaduan']
        ];

        return view('rt.DataPengaduan.index', ['header' => $header]);
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $pengaduan = PengaduanModel::select('tanggal_pengaduan', 'nama', 'pengaduan_id')->get();
            return DataTables::of($pengaduan)->addIndexColumn()
                ->addColumn('aksi', function ($pengaduan) {
                    $aksi = '';
                    $aksi .= '<a href="' . url('/data_pengaduan/' . $pengaduan->pengaduan_id) . '" class="text-white py-2 px-3 rounded-xl" style="background: #478ecc;">Rincian</a> ';
                    return $aksi;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
    }

    public function show(string $id)
    {
        $pelaporan = PengaduanModel::find($id);

        $header = (object) [
            'title' => 'Data Pengaduan',
            'list' => ['Beranda', 'Data Pengaduan', 'Rincian Pengaduan']
        ];

        return view('rt.DataPengaduan.show', ['header' => $header, 'pelaporan' => $pelaporan]);
    }
}
