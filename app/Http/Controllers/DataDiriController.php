<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataDiri;
use App\Models\DataDiriModel;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\UserModel;
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

        $user = Auth::user();
        $status = $user->status;
        $dataDiri = $user->dataDiri;

        return view('warga.DataDiri.index', compact('header', 'user', 'dataDiri', 'status'));
    }

    public function formSatu()
    {
        $header = (object) [
            'title' => 'Data Diri',
            'list' => ['Beranda', 'Data Diri', 'Form Lengkapi Data Diri']
        ];

        $user = Auth::user();

        return view('warga.DataDiri.formSatu', ['header' => $header, 'user' => $user]);
    }

    public function storeSatu(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string',
            'jenis_kelamin' => 'required',
            'status_perkawinan' => 'required',
            'no_telp' => 'required|string|size:12',
            'no_kk' => 'required|string|size:16',
            'hubungan_kk' => 'required',
            'status_kependudukan' => 'required',
            'kewarganegaraan' => 'required|string',
            'pekerjaan' => 'required',
            'alamat_tinggal' => 'required|string',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required|string',
            'kecamatan' => 'required|string',
            'kota' => 'required|string',
            'alamat_ktp' => 'required|string',
        ]);

        session()->put('warga.DataDiri.formSatu', $validatedData);

        return redirect()->route('form.dua');
    }

    public function formDua()
    {
        $header = (object) [
            'title' => 'Data Diri',
            'list' => ['Beranda', 'Data Diri', 'Form Lengkapi Berkas Data Diri']
        ];

        if (!session()->has('warga.DataDiri.formSatu')) {
            return redirect()->route('form.satu');
        }

        return view('warga.DataDiri.formDua', ['header' => $header]);
    }

    public function storeDua(Request $request)
    {
        $validatedData = $request->validate([
            'foto_ktp' => 'required|image|max:2048',
            'foto_kk' => 'required|image|max:2048',
            'foto_surat_nikah' => 'required|image|max:2048',
            'foto_profil' => 'required|image|max:2048',

        ]);

        $data = array_merge(session('warga.DataDiri.formSatu'), $validatedData);

        $file_ktp = $request->file('foto_ktp')->getClientOriginalName();
        $request->file('foto_ktp')->move(public_path('img/ktp'), $file_ktp);

        $file_kk = $request->file('foto_kk')->getClientOriginalName();
        $request->file('foto_kk')->move(public_path('img/kk'), $file_kk);

        $file_nikah = $request->file('foto_surat_nikah')->getClientOriginalName();
        $request->file('foto_surat_nikah')->move(public_path('img/surat-nikah'), $file_nikah);

        $file_profil = $request->file('foto_profil')->getClientOriginalName();
        $request->file('foto_profil')->move(public_path('img/profil'), $file_profil);

        $user = Auth::user();

        $dataDiri = new DataDiriModel();
        $dataDiri->nik = $user->nik;
        $user->status = 'Menunggu verifikasi';
        $dataDiri->tanggal_lahir = $data['tanggal_lahir'];
        $dataDiri->tempat_lahir = $data['tempat_lahir'];
        $dataDiri->jenis_kelamin = $data['jenis_kelamin'];
        $dataDiri->status_perkawinan = $data['status_perkawinan'];
        $dataDiri->no_telp = $data['no_telp'];
        $dataDiri->no_kk = $data['no_kk'];
        $dataDiri->hubungan_kk = $data['hubungan_kk'];
        $dataDiri->status_kependudukan = $data['status_kependudukan'];
        $dataDiri->kewarganegaraan = $data['kewarganegaraan'];
        $dataDiri->pekerjaan = $data['pekerjaan'];
        $dataDiri->alamat_tinggal = $data['alamat_tinggal'];
        $dataDiri->rt = $data['rt'];
        $dataDiri->rw = $data['rw'];
        $dataDiri->kelurahan = $data['kelurahan'];
        $dataDiri->kecamatan = $data['kecamatan'];
        $dataDiri->kota = $data['kota'];
        $dataDiri->alamat_ktp = $data['alamat_ktp'];
        $dataDiri->foto_ktp = $file_ktp;
        $dataDiri->foto_kk = $file_kk;
        $dataDiri->foto_surat_nikah = $file_nikah;
        $dataDiri->foto_profil = $file_profil;


        $dataDiri->save();
        $user->save();

        session()->forget('warga.DataDiri.formSatu');

        return redirect('/data_diri')->with('success', 'Formulir berhasil disimpan.');
    }

    public function formPassword()
    {
        $header = (object) [
            'title' => 'Data Diri',
            'list' => ['Beranda', 'Data Diri', 'Form Lengkapi Berkas Data Diri']
        ];

        return view('warga.DataDiri.formPassword', ['header' => $header]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        if ($request->filled('new_username')) {
            $request->validate([
                'new_username' => 'required',
            ]);

            $user->username = $request->new_username;
        }

        if ($request->filled('password')) {
            $request->validate([
                'password' => 'required|min:8|confirmed',
                'password_confirmation' => 'required'
            ]);

            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect('/data_diri')->with('success', 'Username dan/atau password berhasil diperbarui.');
    }

    public function showChart()
    {
        $data = DB::table('data_diri')
            ->select(DB::raw('jenis_kelamin, hubungan_kk, COUNT(*) as count'))
            ->groupBy('jenis_kelamin', 'hubungan_kk')
            ->get();

        $male = $data->where('jenis_kelamin', 'Laki-laki')->sum('count');
        $female = $data->where('jenis_kelamin', 'Perempuan')->sum('count');
        $headOfFamily = $data->where('hubungan_kk', 'kepala keluarga')->sum('count');
        $jumlahWarga = DB::table('data_diri')->count('no_kk');

        return view('diagrambatang', compact('male', 'female', 'headOfFamily', 'jumlahWarga'));
    }

    public function getRtData(Request $request)
    {
        $gender = $request->input('gender');
        $relationship = $request->input('relationship');

        $query = DB::table('data_diri')
            ->select('rt', DB::raw('COUNT(*) as count'))
            ->groupBy('rt');

        if ($gender) {
            $query->where('jenis_kelamin', $gender);
        }

        if ($relationship) {
            $query->where('hubungan_kk', $relationship);
        }

        $data = $query->get();

        $rt1 = $data->where('rt', 1)->sum('count');
        $rt2 = $data->where('rt', 2)->sum('count');
        $rt3 = $data->where('rt', 3)->sum('count');
        $rt4 = $data->where('rt', 4)->sum('count');
        $rt5 = $data->where('rt', 5)->sum('count');

        return response()->json([
            'rt1' => $rt1,
            'rt2' => $rt2,
            'rt3' => $rt3,
            'rt4' => $rt4,
            'rt5' => $rt5
        ]);
    }
}
