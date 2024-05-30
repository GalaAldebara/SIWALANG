<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
use App\Models\PelaporanTamuModel;
use Carbon\Carbon;

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

    public function form()
    {
        $header = (object) [
            'title' => 'Data Tamu',
            'list' => ['Beranda', 'Data Tamu', 'Formulir Data Tamu']
        ];

        return view('rt.DataTamu.form', ['header' => $header]);
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

        return redirect('data_tamu')
            ->with('success', 'Pelaporan tamu berhasil disimpan.');
    }
}
