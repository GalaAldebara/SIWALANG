<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class KeuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $data = [
            [
                'keuangan_id' => 1,
                'nik' => '3576014403920001',
                'tanggal_kegiatan' => Carbon::now()->subDays(rand(0, 90)),
                'kategori' => 'Pemasukan',
                'keterangan' => 'Iuran Sampah',
                'jumlah' => '1000000',
                'total' => '1000000'
            ],
        ];

        $current_total = 1000000;

        for ($i = 2; $i <= 20; $i++) {
            $kategori = $faker->randomElement(['Pemasukan', 'Pengeluaran']);
            $jumlah = $faker->numberBetween(50000, 500000);

            if ($kategori == 'Pemasukan') {
                $current_total += $jumlah;
            } else {
                $current_total -= $jumlah;
            }

            $data[] = [
                'keuangan_id' => $i,
                'nik' => '3576014403920001',
                'tanggal_kegiatan' => now(),
                'kategori' => $kategori,
                'keterangan' => $faker->randomElement(['Iuran Gotong Royong', 'Bayar Sampah', 'Infaq', 'Sadaqah', 'Donasi']),
                'jumlah' => $jumlah,
                'total' => $current_total,
            ];
        }

        DB::table('keuangan')->insert($data);
    }
}
