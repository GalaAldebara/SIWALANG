<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelKecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatan = [
            ['level_id' => 1, 'level_kode' => 'BLMB', 'level_nama' => 'Blimbing'],
            ['level_id' => 2, 'level_kode' => 'KDK', 'level_nama' => 'Kedung Kandang'],
            ['level_id' => 3, 'level_kode' => 'KLJ', 'level_nama' => 'Klojen'],
            ['level_id' => 4, 'level_kode' => 'LWK', 'level_nama' => 'Lowokwaru'],
            ['level_id' => 5, 'level_kode' => 'SKN', 'level_nama' => 'Sukun'],
        ];
        DB::table('level_kecamatan')->insert($kecamatan);
    }
}
