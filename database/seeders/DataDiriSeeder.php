<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataDiriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'nik' => '357305006',
                'tempat_lahir' => 'Kediri',
                'tanggal_lahir' => '2024-05-24',
                'jenis_kelamin' => 'Laki-laki',
                'status_perkawinan' => 'Belum Nikah',
                'no_telp' => '085635456234',
                'no_kk' => '0981237651230984',
                'hubungan_kk' => 'anak',
                'status_kependudukan' => 'Warga Asli',
                'kewarganegaraan' => 'Indonesia',
                'pekerjaan' => 'Pelajar',
                'alamat_tinggal' => 'Jl.buntu No.31',
                'rt' => '1',
                'rw' => '1',
                'kelurahan' => 'Lang-Lang',
                'kecamatan' => 'Singosari',
                'kota' => 'Malang',
                'alamat_ktp' => 'Jl.buntu No.31 RT.01 RW.01 Lang-Lang Singosari Malang',
                'foto_ktp' => 'pexels_andrea_piacquadio_874158_grid_300_x_300_jpg_1.png',
                'foto_kk' => 'pexels_andrea_piacquadio_874158_grid_300_x_300_jpg_1.png',
                'foto_surat_nikah' => 'pexels_andrea_piacquadio_874158_grid_300_x_300_jpg_1.png',
                'foto_profil' => 'pexels_andrea_piacquadio_874158_grid_300_x_300_jpg_1.png',
            ],
            [
                'id' => 2,
                'nik' => '357305007',
                'tempat_lahir' => 'Malang',
                'tanggal_lahir' => '2024-05-24',
                'jenis_kelamin' => 'Laki-laki',
                'status_perkawinan' => 'Belum Nikah',
                'no_telp' => '085635456234',
                'no_kk' => '0981237651230984',
                'hubungan_kk' => 'anak',
                'status_kependudukan' => 'Warga Asli',
                'kewarganegaraan' => 'Indonesia',
                'pekerjaan' => 'Pelajar',
                'alamat_tinggal' => 'Jl.buntu No.31',
                'rt' => '2',
                'rw' => '2',
                'kelurahan' => 'Lang-Lang',
                'kecamatan' => 'Singosari',
                'kota' => 'Malang',
                'alamat_ktp' => 'Jl.buntu No.31 RT.01 RW.01 Lang-Lang Singosari Malang',
                'foto_ktp' => 'pexels_andrea_piacquadio_874158_grid_300_x_300_jpg_1.png',
                'foto_kk' => 'pexels_andrea_piacquadio_874158_grid_300_x_300_jpg_1.png',
                'foto_surat_nikah' => 'pexels_andrea_piacquadio_874158_grid_300_x_300_jpg_1.png',
                'foto_profil' => 'pexels_andrea_piacquadio_874158_grid_300_x_300_jpg_1.png',
            ]
        ];
        DB::table('data_diri')->insert($data);
    }
}
