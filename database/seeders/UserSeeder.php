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
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 2,
                'level_id' => 2,
                'nik' => '357305002',
                'username' => 'RW',
                'nama' => 'Sudiono',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 3,
                'level_id' => 3,
                'nik' => '357305003',
                'username' => 'RT',
                'nama' => 'Wahyu',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 4,
                'level_id' => 4,
                'nik' => '357305004',
                'username' => 'Warga',
                'nama' => 'Silfi Nazarina',
                'password' => Hash::make('12345')
            ]
        ];
        DB::table('m_user')->insert($data);
    }
}
