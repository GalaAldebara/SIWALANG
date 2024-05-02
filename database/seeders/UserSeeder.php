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
                'alamat' => 'Jl.Watugilang 17c',
                'no_telp' => '0813632288001',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 2,
                'level_id' => 2,
                'nik' => '357305002',
                'username' => 'RW',
                'nama' => 'Sudiono',
                'alamat' => 'Jl. Lang-Lang 3',
                'no_telp' => '0813632288002',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 3,
                'level_id' => 3,
                'nik' => '357305003',
                'username' => 'RT',
                'nama' => 'Wahyu',
                'alamat' => 'Jl. Lang-Lang 2',
                'no_telp' => '0813632288003',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 4,
                'level_id' => 4,
                'nik' => '357305004',
                'username' => 'Warga',
                'nama' => 'Silfi Nazarina',
                'alamat' => 'Jl. Lang-Lang 1',
                'no_telp' => '0813632288004',
                'password' => Hash::make('12345')
            ]
        ];
        DB::table('m_user')->insert($data);
    }
}
