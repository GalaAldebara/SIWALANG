<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BansosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Faker::create('id_ID');
        $initialNik = 3576014403940001;
        $kkNumber = 3172010502090900;

        $dataMatriks = [
            [1, 4, 4, 3, 4, 3, 5, 2, 4, 1],
            [1, 1, 3, 1, 3, 2, 4, 1, 1, 2],
            [2, 1, 2, 1, 3, 2, 5, 1, 1, 3],
            [1, 2, 4, 2, 3, 3, 3, 1, 3, 1],
            [2, 1, 1, 1, 3, 2, 4, 1, 1, 2],
            [2, 1, 3, 1, 3, 3, 5, 1, 2, 3],
            [2, 1, 2, 1, 3, 2, 4, 1, 2, 2],
            [1, 4, 3, 2, 3, 3, 3, 1, 3, 2],
            [2, 1, 4, 1, 3, 3, 3, 1, 2, 1],
            [1, 3, 4, 3, 3, 3, 2, 2, 3, 1],

            [1, 2, 3, 3, 2, 4, 3, 1, 1, 5],
            [1, 4, 4, 3, 5, 2, 1, 1, 1, 1],
            [2, 2, 2, 3, 1, 1, 5, 1, 4, 2],
            [1, 3, 2, 1, 5, 3, 2, 2, 4, 3],
            [1, 3, 5, 2, 3, 3, 3, 2, 1, 2],
            [2, 2, 2, 3, 1, 4, 1, 1, 4, 5],
            [1, 3, 1, 3, 2, 1, 1, 2, 3, 4],
            [2, 4, 2, 1, 5, 3, 2, 2, 2, 1],
            [2, 2, 4, 1, 5, 4, 5, 1, 2, 1],
            [1, 1, 3, 1, 3, 2, 4, 1, 1, 2],

            [2, 4, 1, 1, 2, 4, 3, 2, 2, 1],
            [2, 1, 2, 1, 1, 3, 1, 1, 2, 3],
            [1, 4, 2, 3, 5, 1, 4, 2, 4, 2],
            [2, 2, 4, 1, 3, 4, 3, 1, 1, 1],
            [1, 2, 4, 3, 3, 3, 1, 1, 3, 2],
            [2, 3, 2, 3, 4, 2, 1, 1, 4, 1],
            [2, 2, 2, 1, 5, 4, 4, 1, 3, 2],
            [2, 3, 2, 1, 3, 4, 3, 1, 4, 1],
            [2, 1, 5, 1, 1, 4, 3, 2, 4, 5],
            [1, 1, 3, 2, 3, 4, 2, 1, 2, 5],

            [1, 3, 5, 1, 1, 4, 5, 1, 2, 4],
            [2, 2, 3, 3, 4, 2, 5, 2, 1, 1],
            [2, 4, 5, 3, 2, 4, 1, 2, 2, 4],
            [2, 3, 1, 3, 4, 2, 5, 1, 4, 5],
            [1, 1, 4, 2, 5, 4, 3, 2, 3, 1],
            [2, 4, 4, 1, 2, 4, 1, 1, 3, 5],
            [1, 1, 2, 1, 1, 4, 4, 2, 2, 3],
            [2, 2, 1, 2, 5, 1, 1, 2, 1, 5],
            [2, 3, 5, 3, 4, 2, 2, 2, 1, 3],
            [1, 3, 4, 1, 3, 3, 1, 1, 3, 2],

            [1, 2, 2, 1, 4, 2, 1, 2, 2, 1],
            [1, 3, 1, 1, 4, 2, 4, 1, 2, 3],
            [2, 2, 3, 3, 2, 3, 2, 2, 3, 1],
            [1, 4, 1, 1, 2, 2, 5, 1, 1, 3],
            [2, 4, 1, 1, 3, 2, 5, 1, 4, 3],
            [1, 4, 4, 3, 4, 3, 4, 1, 1, 3],
            [1, 2, 2, 2, 1, 1, 4, 1, 1, 1],
            [1, 3, 3, 1, 3, 2, 1, 1, 4, 2],
            [1, 3, 4, 2, 4, 2, 5, 2, 2, 3],
            [2, 2, 1, 2, 1, 2, 4, 2, 2, 5],
        ];

        foreach ($dataMatriks as $index => $data) {
            $no_kk = $kkNumber + 1 + $index;

            DB::table('bansos')->insert([
                'status_rumah' => $data[0],
                'alas_rumah' => $data[1],
                'pekerjaan' => $data[2],
                'dinding_rumah' => $data[3],
                'luas_rumah' => $data[4],
                'besaran_listrik' => $data[5],
                'jumlah_tanggungan' => $data[6],
                'fasilitas_wc' => $data[7],
                'pendapatan' => $data[8],
                'jumlah_kendaraan' => $data[9],
                'nik' => $initialNik,
                'no_kk' => $no_kk,
                'jumlah_keluarga' => 3,
                'foto_gaji' => 'slip-gaji.png',
                'foto_sktm' => 'foto-sktm.png',
                'status_pengajuan' => 'diterima',
                'id_notif' => null,
                'tanggal_pengajuan' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $initialNik += 3;

            if (($index + 1) % 10 == 0) {
                $initialNik += 30;
                $kkNumber += 20;
            }
        }
    }
}
