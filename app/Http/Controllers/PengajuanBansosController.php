<?php

namespace App\Http\Controllers;

use App\Models\BansosModel;
use App\Models\NotifModel;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PengajuanBansosController extends Controller
{
    public function index()
    {

        $header = (object) [
            'title' => 'Pengajuan Bansos',
            'list' => ['Beranda', 'Pengajuan Bansos']
        ];

        $bansos = BansosModel::all();
        return view('warga.bansos.index', ['bansos' => $bansos, 'header' => $header]);
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $user = Auth::user();
            $nik = $user->nik;
            $bansos = BansosModel::select('tanggal_pengajuan', 'status_pengajuan')
                ->where('nik', $nik)
                ->get();
            return DataTables::of($bansos)->make(true);
        }
    }

    public function form()
    {
        $header = (object) [
            'title' => 'Pengajuan Bansos',
            'list' => ['Beranda', 'Pengajuan Bansos', 'Formulir Pengajuan Bansos']
        ];

        return view('warga.bansos.form', ['header' => $header]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_kk' => 'required|string|max:50',
            'jumlah_keluarga' => 'required|integer',
            'jumlah_tanggungan' => 'required|string',
            'status_rumah' => 'required|string',
            'luas_rumah' => 'required|string',
            'alas_rumah' => 'required|string',
            'dinding_rumah' => 'required|string',
            'fasilitas_wc' => 'required|string',
            'besaran_listrik' => 'required|string',
            'jumlah_kendaraan' => 'required|string',
            'pendapatan' => 'required|string',
            'pekerjaan' => 'required|string',
            'foto_gaji' => 'required|image|max:2240',
            'foto_sktm' => 'required|image|max:2240',
        ]);

        $user = Auth::user();
        $userId = $user->user_id;
        $newNotification = NotifModel::create([
            'user_id' => 3,
            'tanggal_notif' => Carbon::now(),
            'keterangan' => 'mengajukan diri sebagai penerima bantuan bansos',
        ]);

        $id_notif = $newNotification->id_notif;

        $fotoGaji = $request->file('foto_gaji');
        $fotoSktm = $request->file('foto_sktm');

        $fotoGajiName = pathinfo($fotoGaji->getClientOriginalName(), PATHINFO_FILENAME) . '_' . Carbon::now()->format('Ymd_His') . '.' . $fotoGaji->getClientOriginalExtension();
        $fotoSktmName = pathinfo($fotoSktm->getClientOriginalName(), PATHINFO_FILENAME) . '_' . Carbon::now()->format('Ymd_His') . '.' . $fotoSktm->getClientOriginalExtension();

        $fotoGaji->move(public_path('img/pengajuan-bansos'), $fotoGajiName);
        $fotoSktm->move(public_path('img/pengajuan-bansos'), $fotoSktmName);

        $data = $request->all();
        $data['nik'] = Auth::user()->nik;
        $data['foto_gaji'] = $fotoGajiName;
        $data['foto_sktm'] = $fotoSktmName;
        $data['tanggal_pengajuan'] = Carbon::now();
        $data['id_notif'] = $id_notif;

        BansosModel::create($data);

        return redirect('pengajuan_bansos')->with('success', 'Pengajuan bansos berhasil disimpan.');
    }
}
