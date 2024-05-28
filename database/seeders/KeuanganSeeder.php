<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KeuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'keuangan_id' => 1,
                'nik' => '357305002',
                'tanggal_kegiatan' => now(),
                'kategori' => 'Pemasukan',
                'keterangan' => 'Iuran Sampah',
                'jumlah' => '100000',
                'total' => '100000'
            ],
        ];

        DB::table('keuangan')->insert($data);
    }
}
