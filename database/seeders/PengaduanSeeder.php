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
                'nik' => '3576014403940004',
                'nama' => 'yoan',
                'tanggal_pengaduan' => now(),
                'keluhan' => 'sudah hampir satu minggu sampah belum diambil oleh petugas',
                'bukti' => 'sampah.jpeg'
            ]
        ];
        DB::table('pengaduan')->insert($data);
    }
}
