<?php

namespace App\Http\Controllers;

use App\Models\DataDiriModel;
use Illuminate\Http\Request;
use App\Models\DataDiri;
use App\Models\UserModel;
use Yajra\DataTables\Facades\DataTables;

class DataWargaController extends Controller
{
    public function index()
    {

        $header = (object) [
            'title' => 'Data Warga',
            'list' => ['Beranda', 'Data Warga']
        ];

        $dataDiri = DataDiriModel::all();
        return view('RW.DataWarga.index', ['dataDiri' => $dataDiri, 'header' => $header]);
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $query = DataDiriModel::join('m_user', 'data_diri.nik', '=', 'm_user.nik')
                ->select('data_diri.nik', 'data_diri.no_kk', 'data_diri.jenis_kelamin', 'data_diri.no_telp', 'data_diri.status_kependudukan', 'm_user.nama', 'data_diri.id')
                ->where('m_user.status', 'Selesai');

            // Tambahkan filter RT jika filter_rt tidak sama dengan 'all'
            if ($request->filter_rt && $request->filter_rt != 'all') {
                $query->where('data_diri.rt', $request->filter_rt);
            }

            $dataDiri = $query->get();

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
                    'aksi' => '<a href="' . url('/RW-DataWarga/' . $item->id) . '" class="text-white p-3 rounded-xl" style="background: #17a2b8;">Rincian</a>',
                ];
                $index++;
            }

            return response()->json(['data' => $formattedData]);
        }
    }

    public function show(string $id)
    {
        $dataDiri = DataDiriModel::find($id);
        $user = UserModel::where('nik', $dataDiri->nik)->first();

        $header = (object) [
            'title' => 'Rincian Data Warga',
            'list' => ['Beranda', 'Data Warga', 'Rincian Data Warga']
        ];

        return view('RW.DataWarga.show', ['header' => $header, 'dataDiri' => $dataDiri, 'user' => $user]);
    }
}
