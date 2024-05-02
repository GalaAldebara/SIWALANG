<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['level_id' => 1, 'level_kode' => 'ADM', 'level_nama' => 'Administrator'],
            ['level_id' => 2, 'level_kode' => 'RW', 'level_nama' => 'Rukun Warga'],
            ['level_id' => 3, 'level_kode' => 'RT', 'level_nama' => 'Rukun Tangga'],
            ['level_id' => 4, 'level_kode' => 'WRG', 'level_nama' => 'Warga'],
        ];
        DB::table('m_level')->insert($data);
    }
}
