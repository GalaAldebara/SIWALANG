<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataDiri;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DataDiriController extends Controller
{
    public function index()
    {
        $header = (object) [
            'title' => 'Data Diri',
            'list' => ['Beranda', 'Data Diri']
        ];

        $dataDiri = DataDiri::all();
        return view('warga.DataDiri.index', ['header' => $header]);
        $dataDiri = DataDiri::all();
        return view('warga.DataDiri.viewDataDiri', compact('dataDiri'));
    }

    public function form()
    {
        $header = (object) [
            'title' => 'Data Diri',
            'list' => ['Beranda', 'Data Diri', 'Form Lengkapi Data Diri']
        ];

        return view('warga.DataDiri.formSatu', ['header' => $header]);
    }

    public function formUpload()
    {
        $header = (object) [
            'title' => 'Data Diri',
            'list' => ['Beranda', 'Data Diri', 'Form Lengkapi Berkas Data Diri']
        ];
    }

    public function formPassword()
    {
        $header = (object) [
            'title' => 'Data Diri',
            'list' => ['Beranda', 'Data Diri', 'Form Lengkapi Berkas Data Diri']
        ];

        return view('warga.DataDiri.formPassword', ['header' => $header]);
    }

    public function createForm()
    {
        $kota = Kota::all();
        $kecamatan = Kecamatan::all();
        return view('warga.DataDiri.formDataDiri', compact('kota', 'kecamatan'));
        // return view('warga.DataDiri.formDataDiri');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'status_perkawinan' => 'required|in:Nikah,Belum Nikah',
            'no_telp' => 'required|string|max:20',
            'no_kk' => 'required|string|max:20',
            'hubungan_kk' => 'required|string|max:20',
            'status_kependudukan' => 'required|in:Warga Asli,Pindah,Kontrak,Kost',
            'alamat_ktp' => 'required|string|max:50',
            'alamat_tinggal' => 'required|string|max:50',
            // 'kota_id' => 'required|exists:kota,id',
            'kota_id' => 'required',
            'kecamatan_id' => 'required',
            'kelurahan_id' => 'required|exists:kelurahan,kelurahan_id',
        ]);
        $user = Auth::user();

        $data = $request->all();
        $data['nik'] = $user->nik;
        $data['nama'] = $user->nama;

        $user = DataDiri::create($data);
        dd($data);

        // try {
        //     DataDiri::create($data);

        //     return redirect()->route('daftar_data_diri')
        //         ->with('success', 'Data diri berhasil disimpan.');
        // } catch (\Exception $e) {
        //     return back()->withInput()->with('error', 'Terjadi kesalahan saat menyimpan data.');
        // }
    }

    public function showForm()
    {
        // return view('warga.DataDiri.formDataDiri');
        $kota = Kota::all();
        $kecamatan = Kecamatan::all();
        return view('warga.DataDiri.formDataDiri', compact('kota', 'kecamatan'));
    }

    public function daftarDataDiri()
    {
        $dataDiri = DataDiri::all();
        return view('warga.DataDiri.viewDataDiri', compact('dataDiri'));
    }

    public function getKelurahan(Request $request)
    {
        $kelurahan = Kelurahan::where('kecamatan_id', $request->kecamatan_id)->get();

        // Debugging: Log data untuk memastikan kelurahan ditemukan
        if ($kelurahan->isEmpty()) {
            Log::info('No kelurahan found for kecamatan_id: ' . $request->kecamatan_id);
        } else {
            Log::info('Kelurahan found: ' . $kelurahan->toJson());
        }

        return response()->json($kelurahan);
    }
}
