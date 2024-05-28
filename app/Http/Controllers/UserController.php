<?php

namespace App\Http\Controllers;

use App\Models\DataDiri;
use App\Models\DataDiriModel;
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

    public function listAkun(Request $request)
    {
        if ($request->ajax()) {
            $user = UserModel::select('nik', 'nama', 'status', 'user_id')
                ->where('level_id', 4)
                ->where('status', '!=', 'Selesai')
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
                        $aksi .= '<form method="POST" action="' . url('/data_warga/' . $user->user_id) . '">' . csrf_field() . method_field('DELETE') . '<button type="submit" class="text-white py-2 px-3 rounded-xl" style="background: #f04438;" onclick="return confirm(\'Apakah Anda yakin menghapus data ini?\');">Hapus</button></form>';
                    } elseif ($user->status === 'Menunggu Verifikasi') {
                        $aksi .= '<a href="' . url('/data_warga/akun/' . $user->user_id) . '" class="text-white py-2 px-3 rounded-xl" style="background: #478ecc;">Detail</a> ';
                    }
                    return $aksi;
                })
                ->rawColumns(['label', 'aksi'])
                ->make(true);
        }
    }

    public function listWarga(Request $request)
    {
        if ($request->ajax()) {
            $dataDiri = DataDiriModel::join('m_user', 'data_diri.nik', '=', 'm_user.nik')
                ->select('data_diri.nik', 'data_diri.no_kk', 'data_diri.jenis_kelamin', 'data_diri.no_telp', 'data_diri.status_kependudukan', 'm_user.nama', 'data_diri.id')
                ->where('m_user.status', 'Selesai')
                ->get();

            $formattedData = [];
            $index = 1;
            foreach ($dataDiri as $item) {
                $formattedData[] = [
                    'DT_RowIndex' => $index,
                    'nik' => $item->nik,
                    'nama' => $item->nama,
                    'no_kk' => $item->no_kk,
                    'jenis_kelamin' => $item->jenis_kelamin,
                    'no_telp' => $item->no_telp,
                    'status_kependudukan' => $item->status_kependudukan,
                    'aksi' => '<a href="' . url('/data_warga/' . $item->id) . '" class="text-white p-3 rounded-xl" style="background: #17a2b8;">Rincian</a>',
                ];
                $index++;
            }

            return response()->json(['data' => $formattedData]);
            return DataTables::of($dataDiri)->make(true);
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
            'nik' => 'required|string|max:50',
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

    public function show(string $id)
    {
        $dataDiri = DataDiriModel::find($id);
        $user = UserModel::where('nik', $dataDiri->nik)->first();

        $header = (object) [
            'title' => 'Rincian Data Warga',
            'list' => ['Beranda', 'Data Warga', 'Rincian Data Warga']
        ];

        return view('rt.DataWarga.show', ['header' => $header, 'dataDiri' => $dataDiri, 'user' => $user]);
    }

    public function showAkun(string $id)
    {
        $user = UserModel::find($id);
        $dataDiri = DataDiriModel::where('nik', $user->nik)->first();

        $header = (object) [
            'title' => 'Rincian Data Warga',
            'list' => ['Beranda', 'Data Warga', 'Rincian Data Warga']
        ];

        return view('rt.DataWarga.showAkun', ['header' => $header, 'dataDiri' => $dataDiri, 'user' => $user]);
    }

    public function edit(string $id)
    {
        $user = UserModel::find($id);
        $dataDiri = DataDiriModel::where('nik', $user->nik)->first();

        $header = (object) [
            'title' => 'Data Warga',
            'list' => ['Beranda', 'Data Warga', 'Rincian Data Warga']
        ];

        return view('rt.DataWarga.edit', ['header' => $header, 'user' => $user, 'dataDiri' => $dataDiri]);
    }

    public function update(Request $request, string $id)
    {
        $dataDiri = DataDiriModel::find($id);
        $user = UserModel::where('nik', $dataDiri->nik)->first();

        $request->validate([
            'status_hidup' => 'required|string'
        ]);

        $user->status_hidup = $request->status_hidup;

        $user->save();

        return redirect('/data_warga/' . $dataDiri->id)->with('success', 'Data user berhasil diubah');
    }

    public function editStatus(Request $request, $id)
    {
        $user = UserModel::find($id);
        $dataDiri = DataDiriModel::where('nik', $user->nik)->first();

        // Periksa apakah tombol yang sesuai ditekan dan sesuaikan status berdasarkan itu
        if ($request->has('konfirmasi')) {
            $user->update(['status' => 'Selesai']);
        } elseif ($request->has('tolak')) {
            $user->update(['status' => 'Ditolak']);
        }

        // Redirect kembali ke halaman rincian data warga setelah pembaruan
        return redirect('/data_warga/')->with('success', 'Status berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $check = UserModel::find($id);
        if (!$check) {
            return redirect('/data_warga')->with('error', 'Data warga berhasil dihapus');
        }

        try {
            UserModel::destroy($id);

            return redirect('/data_warga')->with('success', 'Data warga berhasil dihapus');
        } catch (\illuminate\Database\QueryException $e) {
            return redirect('/data_warga')->with('error', 'Data warga gagal dihapus karena masih terdapat tabel yang terkait dengan data ini');
        }
    }
}
