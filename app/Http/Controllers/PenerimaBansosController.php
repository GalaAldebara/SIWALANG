<?php

namespace App\Http\Controllers;

use App\Models\BansosModel;
use App\Models\DataDiriModel;
use App\Models\NotifModel;
use App\Models\SkorBansosModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Log;
use Yajra\DataTables\Facades\DataTables;

class PenerimaBansosController extends Controller
{
    public function index()
    {

        $header = (object) [
            'title' => 'Data Penerima Bansos',
            'list' => ['Beranda', 'Data Penerima Bansos']
        ];

        return view('rt.bansos.index', ['header' => $header]);
    }

    public function listPemohon(Request $request)
    {
        if ($request->ajax()) {
            $bansos = BansosModel::leftJoin('skor_bansos', 'bansos.id_bansos', '=', 'skor_bansos.id_bansos')
                ->leftJoin('m_user', 'bansos.nik', '=', 'm_user.nik')
                ->leftJoin('data_diri', 'bansos.nik', '=', 'data_diri.nik')
                ->where('bansos.status_pengajuan', "diterima")
                ->where('data_diri.rt', auth()->user()->user_id - 2)
                ->select('bansos.nik', 'm_user.nama', 'bansos.no_kk', 'skor_bansos.skor', 'data_diri.no_telp')
                ->get()
                ->map(function ($item, $key) {
                    $item->DT_RowIndex = $key + 1;
                    return $item;
                });

            return DataTables::of($bansos)
                ->addIndexColumn()
                ->make(true);
        }
    }

    public function listPenerima(Request $request)
    {
        if ($request->ajax()) {
            $bansos = BansosModel::leftJoin('skor_bansos', 'bansos.id_bansos', '=', 'skor_bansos.id_bansos')
                ->leftJoin('m_user', 'bansos.nik', '=', 'm_user.nik')
                ->leftJoin('data_diri', 'bansos.nik', '=', 'data_diri.nik')
                ->where('bansos.status_bansos', "lolos")
                ->where('data_diri.rt', auth()->user()->user_id - 2)
                ->select('bansos.nik', 'm_user.nama', 'bansos.no_kk', 'skor_bansos.skor', 'data_diri.no_telp', 'bansos.id_bansos')
                ->get()
                ->map(function ($item, $key) {
                    $item->DT_RowIndex = $key + 1;
                    return $item;
                });

            return DataTables::of($bansos)
                ->addIndexColumn()
                ->addColumn('aksi', function ($bansos) {
                    $btn = '<div class="flex justify-center gap-x-3">';
                    $btn .= '<a href="' . url('/penerima_bansos/' . $bansos->id_bansos) . '" class="text-white px-3 rounded-xl flex items-center" style="background: #17a2b8;">Rincian</a>';
                    $btn .= '<form method="POST" action="' . url('/penerima_bansos/' . $bansos->id_bansos) . '">' . csrf_field() . method_field('DELETE') . '<button type="submit" class="text-white py-2 px-3 rounded-xl" style="background: #f04438;" onclick="return confirm(\'Apakah Anda yakin menghapus data ini?\');">Hapus</button></form>';
                    $btn .= '</div>';
                    return $btn;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
    }

    public function show(string $id)
    {
        $bansos = BansosModel::find($id);
        $user = UserModel::where('nik', $bansos->nik)->first();
        $dataDiri = DataDiriModel::where('nik', $bansos->nik)->first();

        $header = (object) [
            'title' => 'Data Penerima Bansos',
            'list' => ['Beranda', 'Data Penerima Bansos', 'Rincian Penerima Bansos']
        ];

        return view('rt.bansos.show', ['header' => $header, 'dataDiri' => $dataDiri, 'user' => $user, 'bansos' => $bansos]);
    }

    public function perankingan(Request $request)
    {
        // Validasi request
        $request->validate([
            'topScores' => 'required|integer|min:1', // Pastikan topScores adalah bilangan bulat positif
        ]);

        $topScores = $request->input('topScores');

        // Lakukan perangkingan dan pembaruan ke dalam database
        try {
            // Lakukan perangkingan di sini, misalnya dengan mengambil N pemohon teratas berdasarkan skor
            $applicants = SkorBansosModel::leftjoin('bansos', 'skor_bansos.id_bansos', '=', 'bansos.id_bansos')
                ->leftJoin('data_diri', 'bansos.nik', '=', 'data_diri.nik')
                ->where('data_diri.rt', auth()->user()->user_id - 2)
                ->select('bansos.status_bansos', 'skor_bansos.skor', 'skor_bansos.id_bansos')
                ->orderBy('skor', 'desc')
                ->get();

            // Lakukan pembaruan status_bansos untuk pemohon yang terpilih
            foreach ($applicants as $key => $applicant) {
                $bansos = BansosModel::find($applicant->id_bansos);
                if ($key < $topScores) {
                    $bansos->status_bansos = 'lolos'; // Ubah status_bansos menjadi 'lolos' untuk pemohon top scores
                } else {
                    $bansos->status_bansos = 'tidak_lolos'; // Ubah status_bansos menjadi 'tidak_lolos' untuk pemohon yang tidak top scores
                }
                $bansos->save(); // Simpan perubahan ke dalam database
            }

            // Kirim respons JSON berhasil
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            // Tangani kesalahan dan kirim respons JSON gagal
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function perhitunganSkor()
    {
        $bansos = BansosModel::where('status_pengajuan', 'diterima')->get();

        // Simpan id_bansos terpisah dari matrik keputusan
        $idBansosList = $bansos->pluck('id_bansos')->toArray();

        // 1. Matrik keputusan awal (X)
        $matrik = [];
        foreach ($bansos as $data) {
            $matrik[] = [
                'status_rumah' => $data->status_rumah,
                'alas_rumah' => $data->alas_rumah,
                'pekerjaan' => $data->pekerjaan,
                'dinding_rumah' => $data->dinding_rumah,
                'luas_rumah' => $data->luas_rumah,
                'besaran_listrik' => $data->besaran_listrik,
                'jumlah_tanggungan' => $data->jumlah_tanggungan,
                'fasilitas_wc' => $data->fasilitas_wc,
                'pendapatan' => $data->pendapatan,
                'jumlah_kendaraan' => $data->jumlah_kendaraan,
            ];
        }

        // 2. Normalisasi matriks keputusan (r)
        $normalisasi = $this->normalisasi($matrik);

        // Bobot Kriteria
        $bobot = [
            'c1' => 0.15, // status_rumah
            'c2' => 0.1, // luas_rumah
            'c3' => 0.05, // alas_rumah
            'c4' => 0.05, // dinding_rumah
            'c5' => 0.1, // besaran_listrik
            'c6' => 0.05, // fasilitas_wc
            'c7' => 0.15, // pekerjaan
            'c8' => 0.2, // pendapatan
            'c9' => 0.1, // jumlah_tanggungan
            'c10' => 0.05, // jumlah_kendaraan
        ];

        // 3. Hitung nilai matrik ketetapan ternormalisasi dengan bobot (Y)
        $matrikKetetapan = $this->nilaiMatrikBobot($normalisasi, $bobot);

        // 4. Hitung Solusi Ideal Positif dan Negatif
        $solusiIdeal = $this->hitungSolusiIdeal($matrikKetetapan);

        // 5. Hitung Jarak ke Solusi Ideal
        $jarakSolusi = $this->hitungJarakSolusi($matrikKetetapan, $solusiIdeal);

        // 6. Hitung Nilai Preferensi
        $nilaiPreferensi = $this->hitungPreferensi($jarakSolusi);

        // 7. Simpan hasil skor ke dalam tabel skor_bansos
        foreach ($bansos as $key => $data) {
            $skor = $nilaiPreferensi[$key];
            SkorBansosModel::updateOrCreate(
                ['id_bansos' => $idBansosList[$key]],
                ['skor' => $skor]
            );
        }

        return response()->json(['success' => true, 'message' => 'Perhitungan skor berhasil dilakukan']);
    }

    // Normalisasi Matrik Keputusan
    private function normalisasi($matrik)
    {
        $normalisasi = [];
        foreach ($matrik as $key => $kriteria) {
            foreach ($kriteria as $kriterias => $value) {
                $sum = 0;
                foreach ($matrik as $item) {
                    $sum += $item[$kriterias];
                }
                $normalisasi[$key][$kriterias] = $value / sqrt($sum);
            }
        }
        return $normalisasi;
    }

    // Perhitungan nilai matriks ketetapan ternormalisasi dengan bobot
    private function  nilaiMatrikBobot($normalisasi, $bobot)
    {
        $matrikKetetapan = [];
        foreach ($normalisasi as $key => $kriteria) {
            $i = 1;
            foreach ($kriteria as $kriterias => $value) {
                $matrikKetetapan[$key][$kriterias] = $value * $bobot["c" . $i];
                $i++;
            }
        }
        return $matrikKetetapan;
    }

    // Hitung Solusi Ideal Positif dan Negatif
    private function hitungSolusiIdeal($matrikKetetapan)
    {
        $idealPositif = [];
        $idealNegatif = [];

        foreach ($matrikKetetapan[0] as $kriterias => $value) {
            $kolom = array_column($matrikKetetapan, $kriterias);
            $idealPositif[$kriterias] = max($kolom);
            $idealNegatif[$kriterias] = min($kolom);
        }
        return ['positif' => $idealPositif, 'negatif' => $idealNegatif];
    }

    // Hitung Jarak ke Solusi Ideal
    private function hitungJarakSolusi($matrikKetetapan, $solusiIdeal)
    {
        $jarakSolusi = [];
        foreach ($matrikKetetapan as $key => $kriteria) {
            $jarakPositif = 0;
            $jarakNegatif = 0;
            foreach ($kriteria as $kriterias => $value) {
                $jarakPositif += pow(($solusiIdeal['positif'][$kriterias] - $value), 2);
                $jarakNegatif += pow(($solusiIdeal['negatif'][$kriterias] - $value), 2);
            }
            $jarakSolusi[$key] = [
                'positif' => sqrt($jarakPositif),
                'negatif' => sqrt($jarakNegatif),
            ];
        }
        return $jarakSolusi;
    }

    // Hitung Nilai Preferensi
    private function hitungPreferensi($jarakSolusi)
    {
        $nilaiPreferensi = [];
        foreach ($jarakSolusi as $key => $jarak) {
            $nilaiPreferensi[$key] = $jarak['negatif'] / ($jarak['positif'] + $jarak['negatif']);
        }
        return $nilaiPreferensi;
    }
}
