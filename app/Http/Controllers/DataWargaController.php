<?php

namespace App\Http\Controllers;

use App\Models\DataDiriModel;
use Illuminate\Http\Request;
use App\Models\DataDiri;
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

    public function datawarga_list(Request $request)
    {
        if ($request->ajax()) {
            $dataWarga = DataDiriModel::select('nik', 'nama', 'no_kk', 'jenis_kelamin', 'no_telp', 'status_kependudukan')->get();
            return DataTables::of($dataWarga)->make(true);
        }
    }
}
