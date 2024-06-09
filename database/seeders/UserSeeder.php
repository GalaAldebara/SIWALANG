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
                'username' => 'RT01',
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
            [
                'user_id' => 8,
                'level_id' => 4,
                'nik' => '1234567890123450', // Sesuaikan dengan nik dari data bansos
                'username' => 'user5',
                'nama' => 'Putri Handayani',
                'status' => 'Menunggu Perlengkapan', // Sesuai permintaan
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 9,
                'level_id' => 4,
                'nik' => '1234567890123451', // Sesuaikan dengan nik dari data bansos
                'username' => 'user6',
                'nama' => 'Ahmad Santoso',
                'status' => 'Menunggu Perlengkapan', // Sesuai permintaan
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 10,
                'level_id' => 4,
                'nik' => '1234567890123452', // Sesuaikan dengan nik dari data bansos
                'username' => 'user7',
                'nama' => 'Siti Aminah',
                'status' => 'Menunggu Perlengkapan', // Sesuai permintaan
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 11,
                'level_id' => 4,
                'nik' => '1234567890123453', // Sesuaikan dengan nik dari data bansos
                'username' => 'user8',
                'nama' => 'Irfan Pratama',
                'status' => 'Menunggu Perlengkapan', // Sesuai permintaan
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 12,
                'level_id' => 4,
                'nik' => '1234567890123454', // Sesuaikan dengan nik dari data bansos
                'username' => 'user9',
                'nama' => 'Dewi Lestari',
                'status' => 'Menunggu Perlengkapan', // Sesuai permintaan
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 13,
                'level_id' => 4,
                'nik' => '1234567890123455', // Sesuaikan dengan nik dari data bansos
                'username' => 'user10',
                'nama' => 'Budi Setiawan',
                'status' => 'Menunggu Perlengkapan', // Sesuai permintaan
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 14,
                'level_id' => 4,
                'nik' => '1234567890123456', // Sesuaikan dengan nik dari data bansos
                'username' => 'user11',
                'nama' => 'Rini Wulandari',
                'status' => 'Menunggu Perlengkapan', // Sesuai permintaan
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 15,
                'level_id' => 4,
                'nik' => '1234567890123457', // Sesuaikan dengan nik dari data bansos
                'username' => 'user12',
                'nama' => 'Dedi Kurniawan',
                'status' => 'Menunggu Perlengkapan', // Sesuai permintaan
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 16,
                'level_id' => 4,
                'nik' => '1234567890123458', // Sesuaikan dengan nik dari data bansos
                'username' => 'user13',
                'nama' => 'Anita Sari',
                'status' => 'Menunggu Perlengkapan', // Sesuai permintaan
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 17,
                'level_id' => 4,
                'nik' => '1234567890123459', // Sesuaikan dengan nik dari data bansos
                'username' => 'user14',
                'nama' => 'Ahmad Budiman',
                'status' => 'Menunggu Perlengkapan', // Sesuai permintaan
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 18,
                'level_id' => 3,
                'nik' => '357305008',
                'username' => 'RT02',
                'nama' => 'budiyanti',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
        ];

        DB::table('m_user')->insert($data);
    }
}
