<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DataDiriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $initialNik = 357305006;
        $fotoPath = 'pexels_andrea_piacquadio_874158_grid_300_x_300_jpg_1.png';

        $data = [];

        foreach (range(0, 44) as $index) {
            $nik = strval($initialNik + $index);
            $rt = 1; // default value

            if ($nik >= 357305009 && $nik <= 357305018) {
                $rt = 2;
            } elseif ($nik >= 357305019 && $nik <= 357305028) {
                $rt = 3;
            } elseif ($nik >= 357305029 && $nik <= 357305038) {
                $rt = 4;
            } elseif ($nik >= 357305039 && $nik <= 357305048) {
                $rt = 5;
            }

            $data[] = [
                'nik' => $nik,
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date('Y-m-d', '2005-01-01'),
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'status_perkawinan' => $faker->randomElement(['Nikah', 'Belum Nikah']),
                'no_telp' => $faker->numerify('08##########'),
                'no_kk' => $faker->numerify('################'),
                'hubungan_kk' => $faker->randomElement(['kepala keluarga', 'isteri', 'anak']),
                'status_kependudukan' => $faker->randomElement(['Warga Asli', 'Kontrak', 'Kost', 'Pindahan']),
                'kewarganegaraan' => 'Indonesia',
                'pekerjaan' => $faker->jobTitle,
                'alamat_tinggal' => $faker->address,
                'rt' => $rt,
                'rw' => 1,
                'kelurahan' => $faker->city,
                'kecamatan' => $faker->city,
                'kota' => $faker->city,
                'alamat_ktp' => $faker->address,
                'foto_ktp' => $fotoPath,
                'foto_kk' => $fotoPath,
                'foto_surat_nikah' => $fotoPath,
                'foto_profil' => $fotoPath,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('data_diri')->insert($data);
    }
}
