<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        $header = (object) [
            'title' => 'Data Warga',
            'list' => ['Beranda', 'Data Warga']
        ];

        return view('rt.DataWarga.index', ['header' => $header]);
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $user = UserModel::select('nik', 'nama', 'status')
                ->where('level_id', 4)
                ->get();

            return DataTables::of($user)->addIndexColumn()
                ->addColumn('label', function ($user) {
                    $label = '';
                    if ($user->status === 'Menunggu Perlengkapan') {
                        $label .= '<button class="font-medium py-2 px-3 rounded-xl" style="background: #d2d4da; color:#383f4d;">INCOMPLETE</button></form>';
                    } elseif ($user->status === 'Menunggu Verifikasi') {
                        $label .= '<button class="ont-medium py-2 px-3 rounded-xl" style="background: #fff4d8; color:#9a7e33;">PENDING</button></form>';
                    } elseif ($user->status === 'Ditolak') {
                        $label .= '<button class="font-medium py-2 px-3 rounded-xl" style="background: #fad5d5; color:#ab1c32;">REJECTED</button></form>';
                    }
                    return $label;
                })
                ->addColumn('aksi', function ($user) {
                    $aksi = '';
                    if ($user->status === 'Menunggu Perlengkapan') {
                        $aksi .= '<form method="POST" action="' . url('/user/' . $user->user_id) . '">' . csrf_field() . method_field('DELETE') . '<button type="submit" class="text-white py-2 px-3 rounded-xl" style="background: #f04438;" onclick="return confirm(\'Apakah Anda yakin menghapus data ini?\');">Hapus</button></form>';
                    } elseif ($user->status === 'Menunggu Verifikasi') {
                        $aksi .= '<a href="' . url('/user/' . $user->user_id) . '" class="text-white py-2 px-3 rounded-xl" style="background: #478ecc;">Detail</a> ';
                    }
                    return $aksi;
                })
                ->rawColumns(['label', 'aksi'])
                ->make(true);
        }
    }

    public function add()
    {
        $header = (object) [
            'title' => 'Data Warga',
            'list' => ['Beranda', 'Data Warga', 'Form Data Warga']
        ];

        return view('rt.DataWarga.tambah', ['header' => $header]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'nik' => 'required|integer|max:9999999999999999',
        ]);

        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => bcrypt($request->password),
            'level_id' => $request->level_id,
            'nik' => $request->nik,
        ]);

        return redirect()->route('data-warga')->with('success', 'Data user berhasil disimpan');
    }
}
