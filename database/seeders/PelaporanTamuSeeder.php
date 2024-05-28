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
                'no_ktp_tamu' => '123456789109',
                'nama_tamu' => 'makmur',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Desa Lang-Lang 1 RT.04 RW.01, SIngosari, Malang, Jawa Timur',
                'tanggal_bertamu' => now(),
                'keterangan_keperluan' => 'Menginap selama 6 bulan karena sepeda motor mogok',
                'nik' => '357305006',
            ]
        ];
        DB::table('pelaporan_tamu')->insert($data);
    }
}
