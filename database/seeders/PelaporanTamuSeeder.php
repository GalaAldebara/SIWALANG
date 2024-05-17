<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelaporanTamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_tuan_rumah' => 'silfi',
                'no_ktp_tamu' => '123456789109',
                'nama_tamu' => 'Silfi Nazarina',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Desa Lang-Lang 1 RT.04 RW.01, SIngosari, Malang, Jawa Timur',
                'tanggal_bertamu' => now(),
                'keterangan_keperluan' => 'Menginap selama satu malam karena sepeda motor mogok',
                'nik' => '357305004',
            ]
        ];
        DB::table('pelaporan_tamu')->insert($data);
    }
}
