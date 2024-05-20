<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $kota = [
            ['nama_kota' => 'Balikpapan'],
            ['nama_kota' => 'Bandung'],
            ['nama_kota' => 'Banjarmasin'],
            ['nama_kota' => 'Batam'],
            ['nama_kota' => 'Bogor'],
            ['nama_kota' => 'Cirebon'],
            ['nama_kota' => 'Denpasar'],
            ['nama_kota' => 'Jakarta'],
            ['nama_kota' => 'Makassar'],
            ['nama_kota' => 'Malang'],
            ['nama_kota' => 'Medan'],
        ];

        DB::table('kota')->insert($kota);
    }
}
