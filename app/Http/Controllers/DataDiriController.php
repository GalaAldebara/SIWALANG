<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataDiri;
use Illuminate\Support\Facades\Auth;

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

        return view('warga.DataDiri.formDua', ['header' => $header]);
    }

    public function formPassword()
    {
        $header = (object) [
            'title' => 'Data Diri',
            'list' => ['Beranda', 'Data Diri', 'Form Lengkapi Berkas Data Diri']
        ];

        return view('warga.DataDiri.formPassword', ['header' => $header]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'status_perkawinan' => 'required|string|max:20',
            'no_telp' => 'required|string|max:20',
            'no_kk' => 'required|string|max:20',
            'hubungan_kk' => 'required|string|max:20',
            'status_kependudukan' => 'required|string|max:20',
            'alamat_ktp' => 'required|string|max:50',
            'alamat_tinggal' => 'required|string|max:50',
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
        return view('warga.DataDiri.formDataDiri');
    }

    public function daftarDataDiri()
    {
        $dataDiri = DataDiri::all();
        return view('warga.DataDiri.viewDataDiri', compact('dataDiri'));
    }
}
