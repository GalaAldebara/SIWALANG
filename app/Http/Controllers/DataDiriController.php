<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataDiri;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DataDiriController extends Controller
{
    public function index()
    {
        $header = (object) [
            'title' => 'Data Diri',
            'list' => ['Beranda', 'Data Diri']
        ];

        $dataDiri = DataDiri::all();
        return view('warga.DataDiri.index', ['header' => $header, 'dataDiri' => $dataDiri]);
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

    // public function showForm2()
    // {
    //     $header = (object) [
    //         'title' => 'Data Diri',
    //         'list' => ['Beranda', 'Data Diri', 'Form Lengkapi Berkas Data Diri']
    //     ];
    //     return view('warga.DataDiri.formPassword', ['header' => $header]);
    // }

    // public function ubahPassword(Request $request)
    // {
    //     $request->validate([
    //         'password_lama' => 'required',
    //         'password_baru' => 'required|string|min:8|confirmed',
    //     ]);

    //     $user = Auth::user();

    //     if (!Hash::check($request->password_lama, $user->password)) {
    //         return redirect()->back()->withErrors(['password_lama' => 'Password lama tidak cocok.']);
    //     }

    //     // Perbarui password langsung di dalam database
    //     DB::table('m_user')
    //         ->where('user_id', $user->user_id)
    //         ->update(['password' => Hash::make($request->password_baru)]);

    //     return redirect()->back()->with('success', 'Password berhasil diubah.');
    // }

    public function createForm()
    {
        $header = (object) [
            'title' => 'Data Diri',
            'list' => ['Beranda', 'Data Diri', 'Form Data Diri']
        ];

        return view('warga.DataDiri.formDataDiri', ['header' => $header]);
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
            'kewarganegaraan' => 'required|string|max:50',
            'kota' => 'required|string|max:50',
            'kecamatan' => 'required|string|max:50',
            'kelurahan' => 'required|string|max:50',
            'RT' => 'required|integer',
            'RW' => 'required|integer'
        ]);

        $user = Auth::user();

        $data = $request->all();
        $data['nik'] = $user->nik;
        $data['nama'] = $user->nama;

        if ($request->hasFile('foto_ktp')) {
            $data['foto_ktp'] = $request->file('foto_ktp')->store('foto_ktp', 'public');
        }
        if ($request->hasFile('foto_kk')) {
            $data['foto_kk'] = $request->file('foto_kk')->store('foto_kk', 'public');
        }
        if ($request->hasFile('surat_nikah')) {
            $data['surat_nikah'] = $request->file('surat_nikah')->store('surat_nikah', 'public');
        }
        if ($request->hasFile('foto_profil')) {
            $data['foto_profil'] = $request->file('foto_profil')->store('foto_profil', 'public');
        }

        // $user = DataDiri::create($data);
        // dd($data);

        try {
            DataDiri::create($data);
            return redirect()->route('data_diri.index')->with('success', 'Data diri berhasil disimpan.');
        } catch (\Exception $e) {
            Log::error($e);
            return back()->withInput()->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }

    public function showForm()
    {
        $header = (object) [
            'title' => 'Data Diri',
            'list' => ['Beranda', 'Data Diri', 'Form Data Diri']
        ];

        return view('warga.DataDiri.formDataDiri', ['header' => $header]);
    }

    public function daftarDataDiri()
    {
        $dataDiri = DataDiri::all();
        return view('warga.DataDiri.viewDataDiri', compact('dataDiri'));
    }
}
