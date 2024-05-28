<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatan = [
            [
                'nama_kecamatan' => 'Blimbing',
                'level_id' => 1,
            ],
            [
                'nama_kecamatan' => 'Kedung Kandang',
                'level_id' => 2,
            ],
            [
                'nama_kecamatan' => 'Klojen',
                'level_id' => 3,
            ],
            [
                'nama_kecamatan' => 'Lowokwaru',
                'level_id' => 4,
            ],
            [
                'nama_kecamatan' => 'Sukun',
                'level_id' => 5,
            ],
        ];

        DB::table('kecamatan')->insert($kecamatan);
    }
}
