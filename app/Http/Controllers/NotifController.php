<?php

namespace App\Http\Controllers;

use App\Models\BansosModel;
use App\Models\DataDiriModel;
use App\Models\NotifModel;
use App\Models\UserModel;
use Auth;
use Illuminate\Http\Request;

class NotifController extends Controller
{
    public function index()
    {
        $header = (object) [
            'title' => 'Notifikasi',
            'list' => ['Beranda', 'Notifikasi']
        ];

        $currentUser = Auth::user();
        $userId = $currentUser->user_id;

        $notif = NotifModel::leftJoin('m_user', 'notif.user_id', '=', 'm_user.user_id')
            ->leftJoin('bansos', 'notif.id_notif', '=', 'bansos.id_notif')
            ->leftJoin('m_user as m_user_nik', 'bansos.nik', '=', 'm_user_nik.nik')
            ->where('m_user.user_id', $userId)
            ->where('bansos.status_pengajuan', "menunggu")
            ->select('m_user.nama', 'notif.keterangan', 'notif.tanggal_notif', 'notif.status_lihat', 'notif.id_notif', 'bansos.id_bansos', 'bansos.nik', 'm_user_nik.nama as nama_nik')
            ->get();

        return view('rt.notif.index', ['header' => $header, 'notif' => $notif]);
    }

    public function updateStatus($id_notif, Request $request)
    {
        $notification = NotifModel::find($id_notif);
        if ($notification) {
            $notification->status_lihat = $request->input('status_lihat');
            $notification->save();
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

    public function verifBansos(string $id)
    {
        $bansos = BansosModel::find($id);
        $user = UserModel::where('nik', $bansos->nik)->first();
        $dataDiri = DataDiriModel::where('nik', $bansos->nik)->first();

        $header = (object) [
            'title' => 'Notifikasi',
            'list' => ['Beranda', 'Notifikasi']
        ];

        return view('rt.notif.showBansos', ['header' => $header, 'dataDiri' => $dataDiri, 'user' => $user, 'bansos' => $bansos]);
    }

    public function updateBansos(Request $request, $id)
    {
        $bansos = BansosModel::findOrFail($id);
        $bansos->status_pengajuan = $request->status;
        $bansos->save();

        $status = $request->status == 'diterima' ? 'Pengajuan bansos berhasil diterima!' : 'Pengajuan bansos ditolak!';
        return redirect('rt_notifikasi')->with('status', $status);
    }
}
