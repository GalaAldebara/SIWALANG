<?php

namespace App\Http\Controllers;

use App\Models\KegiatanModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function agenda()
    {
        $kegiatan = KegiatanModel::where('status_kegiatan', 'belum selesai')->get();

        $header = (object) [
            'title' => 'Agenda Kegiatan',
            'list' => ['Beranda', 'Agenda Kegiatan']
        ];

        return view('warga.AgendaKegiatan.index', ['header' => $header, 'kegiatan' => $kegiatan]);
    }

    public function rincian(string $id)
    {
        $kegiatan = KegiatanModel::find($id);

        $header = (object) [
            'title' => 'Agenda Kegiatan',
            'list' => ['Beranda', 'Agenda Kegiatan', 'Rincian Agenda Kegiatan']
        ];

        return view('warga.AgendaKegiatan.rincian', ['header' => $header, 'kegiatan' => $kegiatan]);
    }

    public function showArsip(string $id)
    {
        $kegiatan = KegiatanModel::find($id);

        $header = (object) [
            'title' => 'Agenda Kegiatan',
            'list' => ['Beranda', 'Agenda Kegiatan', 'Rincian Agenda Kegiatan']
        ];

        return view('warga.AgendaKegiatan.rincian', ['header' => $header, 'kegiatan' => $kegiatan]);
    }

    public function arsip()
    {
        $kegiatan = KegiatanModel::where('status_kegiatan', 'selesai')->get();

        $header = (object) [
            'title' => 'Agenda Kegiatan',
            'list' => ['Beranda', 'Arsip Kegiatan']
        ];

        return view('warga.ArsipKegiatan.index', ['header' => $header, 'kegiatan' => $kegiatan]);
    }

    // RW
    public function index()
    {
        $header = (object) [
            'title' => 'Kegiatan',
            'list' => ['Beranda', 'Kegiatan']
        ];

        return view('RW.Kegiatan.index', ['header' => $header]);
    }

    public function listData(Request $request)
    {
        if ($request->ajax()) {
            $kegiatan = KegiatanModel::all()->map(function ($item, $key) {
                $item->DT_RowIndex = $key + 1;
                return $item;
            });

            return datatables()->of($kegiatan)
                ->addIndexColumn()
                ->addColumn('aksi', function ($kegiatan) {
                    if ($kegiatan->status_kegiatan == 'selesai') {
                        $btn = '<div class="flex justify-center gap-x-3">';
                        $btn .= '<a href="' . url('/data/kegiatan/show/' . $kegiatan->id_kegiatan) . '" class="text-white py-2 px-3 rounded-xl" style="background: #17a2b8;">Rincian</a>';
                        $btn .= '<form method="POST" action="' . url('/data/kegiatan/delete/' . $kegiatan->id_kegiatan) . '" style="display:inline;">' . csrf_field() . method_field('DELETE') . '<button type="submit" class="text-white py-2 px-3 rounded-xl" style="background: #f04438;" onclick="return confirm(\'Apakah Anda yakin menghapus data ini?\');">Hapus</button></form>';
                        $btn .= '</div>';
                        return $btn;
                    } else {
                        $btn = '<div class="flex justify-center gap-x-3">';
                        $btn .= '<a href="' . url('/data/kegiatan/show/' . $kegiatan->id_kegiatan) . '" class="text-white py-2 px-3 rounded-xl" style="background: #17a2b8;">Rincian</a>';
                        $btn .= '<form method="POST" action="' . url('/data/kegiatan/delete/' . $kegiatan->id_kegiatan) . '" style="display:inline;">' . csrf_field() . method_field('DELETE') . '<button type="submit" class="text-white py-2 px-3 rounded-xl" style="background: #f04438;" onclick="return confirm(\'Apakah Anda yakin menghapus data ini?\');">Hapus</button></form>';
                        $btn .= '<a href="' . url('/data/kegiatan/form/' . $kegiatan->id_kegiatan) . '" class="text-white py-2 px-3 rounded-xl" style="background: green;">Selesai</a>';
                        $btn .= '</div>';
                        return $btn;
                    }
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
    }

    public function form()
    {
        $header = (object) [
            'title' => 'Tambah Kegiatan',
            'list' => ['Beranda', 'Kegiatan', 'Form Tambah Kegiatan']
        ];

        return view('RW.kegiatan.form', ['header' => $header]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string|max:50',
            'deskripsi_kegiatan' => 'required|string',
            'hari' => 'required',
            'tanggal_kegiatan' => 'required|date',
            'jam_mulai' => 'required|string',
            'jam_selesai' => 'required|string',
            'lokasi' => 'required|string|max:100',
        ]);

        $data = $request->all();

        KegiatanModel::create($data);

        return redirect('data/kegiatan')->with('success', 'Pengajuan bansos berhasil disimpan.');
    }

    public function show(string $id)
    {
        $kegiatan = KegiatanModel::find($id);

        $header = (object) [
            'title' => 'Rincian Kegiatan',
            'list' => ['Beranda', 'Kegiatan', 'Rincian Kegiatan']
        ];

        return view('RW.kegiatan.show', ['header' => $header, 'kegiatan' => $kegiatan]);
    }

    public function formDokumen(string $id)
    {
        $kegiatan = KegiatanModel::find($id);

        $header = (object) [
            'title' => 'Tambah Kegiatan',
            'list' => ['Beranda', 'Kegiatan', 'Form Tambah Kegiatan']
        ];

        return view('RW.kegiatan.formDokumen', ['header' => $header, 'kegiatan' => $kegiatan]);
    }

    public function storeDokumen(Request $request, string $id)
    {
        $request->validate([
            'dokumentasi' => 'required|image',
        ]);

        // Mendapatkan file yang diunggah
        $fotoDokumen = $request->file('dokumentasi');

        // Membuat nama file yang unik dengan waktu saat ini
        $fotoDokumenNama = pathinfo($fotoDokumen->getClientOriginalName(), PATHINFO_FILENAME) . '_' . Carbon::now()->format('Ymd_His') . '.' . $fotoDokumen->getClientOriginalExtension();

        // Memindahkan file ke folder tujuan
        $fotoDokumen->move(public_path('img/arsip-kegiatan'), $fotoDokumenNama);

        // Membuat entri baru di model KegiatanModel
        $data = [
            'foto_sktm' => $fotoDokumenNama,
            'status_kegiatan' => 'selesai', // Jika Anda ingin mengubah status kegiatan setelah mengunggah foto baru
        ];

        // Perbarui data kegiatan dengan foto baru
        $kegiatan = KegiatanModel::findOrFail($id);
        $kegiatan->update($data);

        // Redirect ke halaman 'pengajuan_bansos' dengan pesan sukses
        return redirect('data/kegiatan')->with('success', 'Foto kegiatan berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        // Temukan kegiatan berdasarkan ID
        $kegiatan = KegiatanModel::findOrFail($id);

        // Hapus entri dari database
        $kegiatan->delete();

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect('data/kegiatan')->with('success', 'Kegiatan berhasil dihapus.');
    }
}
