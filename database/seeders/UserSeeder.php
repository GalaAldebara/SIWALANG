<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'level_id' => 1,
                'nik' => '357305001',
                'username' => 'Admin',
                'nama' => 'Admin',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 2,
                'level_id' => 2,
                'nik' => '357305002',
                'username' => 'RW',
                'nama' => 'Sudiono',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 3,
                'level_id' => 3,
                'nik' => '357305003',
                'username' => 'RT',
                'nama' => 'Wahyu',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 4,
                'level_id' => 4,
                'nik' => '357305004',
                'username' => 'silfi',
                'nama' => 'Silfi Nazarina',
                'status' => 'Menunggu Perlengkapan',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 5,
                'level_id' => 4,
                'nik' => '357305005',
                'username' => 'yatno',
                'nama' => 'Yatno',
                'status' => 'Ditolak',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 6,
                'level_id' => 4,
                'nik' => '357305006',
                'username' => 'yoan',
                'nama' => 'Yoan',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 7,
                'level_id' => 4,
                'nik' => '357305007',
                'username' => 'makmur',
                'nama' => 'Makmur',
                'status' => 'Menunggu Verifikasi',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
        ];

        DB::table('m_user')->insert($data);
    }
}
