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
        $initialNik = 3576014403940001;
        $fotoPath = 'pexels_andrea_piacquadio_874158_grid_300_x_300_jpg_1.png';
        $fotoKtp = 'image 4.png';
        $fotoKk = 'Gambar KK.jpg';
        $fotoSN = 'surat-nikah.jpeg';

        $data = [];
        $kkCounter = 0;
        $nullCounter = 0;
        $kkNumber = 3172010502090900;
        $hubungan_kk_sequence = ['kepala keluarga', 'isteri', 'anak'];

        // Array untuk alur input jenis kelamin: laki-laki, perempuan, laki-laki/perempuan
        $jenis_kelamin_sequence = ['Laki-laki', 'Perempuan', 'random'];
        $perkawinan_sequence = ['kawin', 'kawin', 'Belum Kawin'];

        foreach (range(0, 299) as $index) {
            // Generate NIK
            do {
                $nik = strval($initialNik + $index);
                $existingNik = DB::table('data_diri')->where('nik', $nik)->exists();
            } while ($existingNik);

            $rt = 0;

            if ($nik >= 3576014403940001 && $nik <= 3576014403940060) {
                $rt = 1;
            } elseif ($nik >= 3576014403940061 && $nik <= 3576014403940120) {
                $rt = 2;
            } elseif ($nik >= 3576014403940121 && $nik <= 3576014403940180) {
                $rt = 3;
            } elseif ($nik >= 3576014403940181 && $nik <= 3576014403940240) {
                $rt = 4;
            } elseif ($nik >= 3576014403940241 && $nik <= 3576014403940300) {
                $rt = 5;
            }

            $nullCounter++;
            $kkCounter++;
            $hubungan_kk = $hubungan_kk_sequence[$kkCounter % count($hubungan_kk_sequence)];

            // Update nomor KK setiap 3 inputan
            if ($index % 3 == 0) {
                $kkNumber++; // Menambah nomor KK
            }

            // Menentukan jenis kelamin sesuai dengan alur input
            $jenis_kelamin = $jenis_kelamin_sequence[$index % count($jenis_kelamin_sequence)];
            $perkawinan = $perkawinan_sequence[$index % count($perkawinan_sequence)];
            if ($jenis_kelamin === 'random') {
                // Jika jenis kelamin adalah "Both", maka secara acak memilih antara "Laki-laki" dan "Perempuan"
                $jenis_kelamin = $faker->randomElement(['Laki-laki', 'Perempuan']);
            }

            // Set foto_surat_nikah menjadi null setelah 2 kali input
            if ($nullCounter < 2) {
                $foto_surat_nikah = $fotoSN;
            } else {
                $foto_surat_nikah = null;
            }

            $data[] = [
                'nik' => (string)$nik,
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date('Y-m-d', '2005-01-01'),
                'jenis_kelamin' => $jenis_kelamin,
                'status_perkawinan' => $perkawinan,
                'no_telp' => $faker->numerify('08##########'),
                'no_kk' => (string)$kkNumber,
                'hubungan_kk' => $hubungan_kk,
                'status_kependudukan' => $faker->randomElement(['Warga Asli', 'Kontrak', 'Kost', 'Pindahan']),
                'kewarganegaraan' => 'Indonesia',
                'pekerjaan' => $faker->randomElement(['swasta', 'wiraswasta', 'petani', 'buruh', 'tidak_bekerja']),
                'alamat_tinggal' => $faker->streetAddress(),
                'rt' => $rt,
                'rw' => 1,
                'kelurahan' => 'Lang-Lang',
                'kecamatan' => 'Singosari',
                'kota' => 'Malang',
                'alamat_ktp' => ($faker->randomElement(['Warga Asli', 'Kontrak', 'Kost', 'Pindahan']) == 'Warga Asli') ?
                    $faker->streetAddress() . ' RT ' . $rt . ' RW 1 Lang-Lang Singosari Malang' : $faker->address,
                'foto_ktp' => $fotoKtp,
                'foto_kk' => $fotoKk,
                'foto_surat_nikah' => $foto_surat_nikah,
                'foto_profil' => $fotoPath,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $nullCounter++;
            if ($nullCounter >= 2) {
                $nullCounter = 0;
            }
        }

        DB::table('data_diri')->insert($data);
    }
}
