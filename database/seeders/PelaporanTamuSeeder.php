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
                'nama_tuan_rumah' => 'yoan',
                'no_ktp_tamu' => '3576014403945000',
                'nama_tamu' => 'makmur',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Desa Lang-Lang 1 RT.04 RW.01, SIngosari, Malang, Jawa Timur',
                'tanggal_bertamu' => now(),
                'keterangan_keperluan' => 'Menginap selama 6 bulan karena sepeda motor mogok',
                'nik' => '3576014403940004',
                'foto_ktp_tamu' => 'image 4_20240530_232305.png',
            ]
        ];
        DB::table('pelaporan_tamu')->insert($data);
    }
}
