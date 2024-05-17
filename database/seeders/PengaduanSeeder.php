<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nik' => '357305004',
                'nama' => 'silfi',
                'tanggal_pengaduan' => now(),
                'keluhan' => 'sudah hampir satu minggu sampah belum diambil oleh petugas',
                'bukti' => 'logo-lang2 1.png'
            ]
        ];
        DB::table('pengaduan')->insert($data);
    }
}
