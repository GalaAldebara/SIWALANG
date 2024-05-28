<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

class DataTamuController extends Controller
{
    //
=======
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
use App\Models\PelaporanTamuModel;

class DataTamuController extends Controller
{
    public function index()
    {
        $header = (object) [
            'title' => 'Data Tamu',
            'list' => ['Beranda', 'Data Tamu']
        ];

        return view('rt.DataTamu.index', ['header' => $header]);
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $tamu = PelaporanTamuModel::select('nama_tuan_rumah', 'no_ktp_tamu', 'nama_tamu', 'jenis_kelamin', 'tanggal_bertamu', 'noTamu')->get();
            return DataTables::of($tamu)->addIndexColumn()
                ->addColumn('aksi', function ($tamu) {
                    $aksi = '';
                    $aksi .= '<a href="' . url('/data_tamu/' . $tamu->noTamu) . '" class="text-white py-2 px-3 rounded-xl" style="background: #478ecc;">Rincian</a> ';
                    return $aksi;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
    }

    public function show(string $id)
    {
        $pelaporan = PelaporanTamuModel::find($id);

        $header = (object) [
            'title' => 'Data Tamu',
            'list' => ['Beranda', 'Data Tamu', 'Rincian Tamu']
        ];

        return view('rt.DataTamu.show', ['header' => $header, 'pelaporan' => $pelaporan]);
    }
>>>>>>> data-tamu
}
