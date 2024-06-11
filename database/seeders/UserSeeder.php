<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'level_id' => 1,
                'nik' => '3576014403910001',
                'username' => 'Admin',
                'nama' => 'Admin',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 2,
                'level_id' => 2,
                'nik' => '3576014403920001',
                'username' => 'RW',
                'nama' => 'Sudiono',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 3,
                'level_id' => 3,
                'nik' => '3576014403930001',
                'username' => 'RT01',
                'nama' => 'Wahyu',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 4,
                'level_id' => 3,
                'nik' => '3576014403930002',
                'username' => 'RT02',
                'nama' => 'budiyanti',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 5,
                'level_id' => 3,
                'nik' => '3576014403930003',
                'username' => 'RT03',
                'nama' => 'Adi Nugroho',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 6,
                'level_id' => 3,
                'nik' => '3576014403930004',
                'username' => 'RT04',
                'nama' => 'Bambang Susilo',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 7,
                'level_id' => 3,
                'nik' => '3576014403930005',
                'username' => 'RT05',
                'nama' => 'Citra Lestari',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
        ];

        DB::table('m_user')->insert($data);

        // $faker = Faker::create();

        // Daftar nama yang ingin Anda gunakan
        $names = [
            'Makmur',
            'Silfi',
            'Nana',
            'yoan',
            'Ahmad Fadil',
            'Siti Aisyah',
            'Budi Santoso',
            'Dewi Lestari',
            'Agus Salim',
            'Rini Handayani',
            'Irfan Maulana',
            'Putri Amelia',
            'Joko Santoso',
            'Rina Indah',
            'Heri Pratama',
            'Ratna Sari',
            'Rizki Ramadhan',
            'Tiara Wulandari',
            'Doni Setiawan',
            'Maya Puspita',
            'Dodi Saputra',
            'Nina Permata',
            'Eko Nugroho',
            'Lina Fitriani',
            'Andi Saputra',
            'Nia Anggraeni',
            'Dika Rahman',
            'Rika Maulidia',
            'Bambang Surya',
            'Dini Safitri',
            'Fajar Setiawan',
            'Lia Pratiwi',
            'Hendra Gunawan',
            'Maya Sari',
            'Adi Kusuma',
            'Tika Fitriani',
            'Rudi Setiawan',
            'Nadia Putri',
            'Fahmi Ramadhan',
            'Ayu Fitri',
            'Bima Pratama',
            'Sari Indah',
            'Dimas Saputra',
            'Nurul Hidayah',
            'Firman Maulana',
            'Dewi Susanti',
            'Ivan Setiawan',
            'Rini Septiani',
            'Hadi Santoso',
            'Anisa Lestari',
            'Yoga Pratama',
            'Sinta Wulandari',
            'Dino Setiawan',
            'Ratna Permata',
            'Arif Nugroho',
            'Sari Fitriani',
            'Bayu Saputra',
            'Tia Anggraeni',
            'Yudi Rahman',
            'Rani Maulidia',
            'Anto Surya',
            'Mira Safitri',
            'Galang Setiawan',
            'Dita Pratiwi',
            'Firman Gunawan',
            'Lita Sari',
            'Hadi Kusuma',
            'Maya Putri',
            'Rico Fitrianto',
            'Sari Anggraeni',
            'Agung Rahman',
            'Wulan Maulida',
            'Eko Surya',
            'Dewi Rahayu',
            'Aldi Prasetyo',
            'Sari Wulandari',
            'Andri Saputra',
            'Ratna Anggraini',
            'Fandi Rahman',
            'Nina Maulidina',
            'Bagus Surya',
            'Ani Fitriani',
            'Hendra Setiawan',
            'Sari Septiani',
            'Denny Santoso',
            'Sinta Dewi',
            'Arief Wibowo',
            'Nia Puspitasari',
            'Yoga Pradana',
            'Eva Fitriana',
            'Dito Saputro',
            'Rita Wulandari',
            'Rizky Setiawan',
            'Nurul Sari',
            'Dedi Gunawan',
            'Siska Sari',
            'Faisal Kusuma',
            'Putri Sari',
            'Rico Nugroho',
            'Ani Susanti',
            'Budi Wijaya',
            'Maya Anggraini',
            'Dimas Pratama',
            'Ratna Dewi',
            'Andi Setiawan',
            'Santi Pratiwi',
            'Hendro Gunawan',
            'Rika Fitriani',
            'Firman Surya',
            'Lina Rahayu',
            'Ari Kusuma',
            'Nia Purnama',
            'Dodi Wijaya',
            'Lia Maulida',
            'Agus Santoso',
            'Dewi Fitria',
            'Bayu Saputro',
            'Sari Rahayu',
            'Byan Nugroho',
            'Ratna Rahayu',
            'Dini Setiawati',
            'Arief Saputra',
            'Rina Anggraeni',
            'Dian Rahmawati',
            'Anto Setiawan',
            'Maya Surya',
            'Galih Pratama',
            'Nina Dewi',
            'Aldi Saputra',
            'Sari Pratiwi',
            'Dedi Kusuma',
            'Susanti Yuni',
            'Denny Prasetyo',
            'Rika Anggraeni',
            'Yoga Maulana',
            'Eva Lestari',
            'Dito Setiawan',
            'Rita Pratiwi',
            'Rizky Maulana',
            'Nurul Septiani',
            'Dedi Fitrianto',
            'Siska Dewi',
            'Faisal Wibowo',
            'Putri Amelina',
            'Rico Pradana',
            'Ani Angranini',
            'Budi Setiawan',
            'Lukman Wijaya',
            'Dimas Wijaya',
            'Ratna Anggraeni',
            'Andi Santoso',
            'Santi Maulida',
            'Hendro Pratama',
            'Rika Dewi',
            'Firman Setiawan',
            'Lina Pratiwi',
            'Ari Gunawan',
            'Nia Fitriani',
            'Dodi Surya',
            'Lia Rahmawati',
            'Agus Kusuma',
            'Dewi Anggraini',
            'Bayu Wijaya',
            'Sari Maulida',
            'Firman Santoso',
            'Ratna Fitriani',
            'Dini Wulandari',
            'Arief Setiawan',
            'Rina Rahayu',
            'Dian Pratiwi',
            'Anto Kusuma',
            'Maya Fitriani',
            'Dimas Setiawan',
            'Ratna Setiawan',
            'Andi Kurniawan',
            'Santi Kusuma',
            'Hendro Putrawan',
            'Rika Ayu',
            'Firman Eka',
            'Lina Ayu',
            'Ari setiawan',
            'Nia Puspita',
            'Dodi Eka',
            'Lia Fitria',
            'Agus Eka',
            'Dewi Fitriani',
            'Bayu Santosa',
            'Sari Putri',
            'Fighaz kusuma',
            'Ratna Saputra',
            'Dini Putri',
            'Arief Eka',
            'Rina Putri',
            'Dian Eka',
            'Anton Setiawan',
            'Maya Setiawan',
            'Galih Saputra',
            'Nina Fitriani',
            'Aldi Santoso',
            'Sari Dewi',
            'Dedi Susanto',
            'Yuni Susanti',
            'Denny Pratama',
            'Rika Pratiwi',
            'Yoga Saputra',
            'Eva Ayu',
            'Dito Santosa',
            'Rita Angraini',
            'Rizky Makmur',
            'Nurul Eka',
            'Dedi Eka',
            'Siska Putri',
            'Faisal Saputra',
            'Putri Fitriani',
            'Rico Saputra',
            'Ani Maulina',
            'Budi Saputra',
            'iqbal wibowo',
            'Dimas Wibowo',
            'Ratna Maulida',
            'Andi Putra',
            'Santi Putri',
            'Hendro Saputra',
            'Dewi Rika',
            'Firman Makmur',
            'Lina Maulidina',
            'Ari Eka',
            'Nia Ayu',
            'Dodi Alimul',
            'Lia Fitriani',
            'Agus Hendra',
            'Dewi Anggraeni',
            'Bayu Eka',
            'Sari Anita',
            'Firman Raka',
            'Ratna Santosa',
            'Dini Fitriani',
            'Arief Maulana',
            'Rina Fitriani',
            'Dian Kusuma',
            'Anton Kusuma',
            'Maya Wulandari',
            'Dimas Maulidi',
            'Ratna Putri',
            'Andi Gunawan',
            'Santi Gunawan',
            'Hendro Putra',
            'Fitriani Rika',
            'Firman Kusuma',
            'Lina Maulidia',
            'Ari Budi',
            'Nia Angraini',
            'Dodi Santosa',
            'Lia Ayu',
            'Agus Putra',
            'Dewi Putri',
            'Bayu Putra',
            'Sari Putriani',
            'Fathir Saputra',
            'Ratna Kusuma',
            'Dini Dewi',
            'Arief Purnama',
            'Rina Dewantari',
            'Dian Saputra',
            'Anto Saputra',
            'Maya Saputra',
            'Galih Santoso',
            'Nina Diana',
            'Aldi Eka',
            'Sari Ayu',
            'Dedi Kusumo',
            'Yunita Susanti',
            'Denny Kusuma',
            'Anggraeni Rika',
            'Yoga Rahmat',
            'Eva Rahmawati',
            'Dito Makmur',
            'Rita Eka',
            'Rizky Maulidin',
            'Nurul Santosa',
            'Dedi Saputra',
            'Siska Wati',
            'Faisal Eka',
            'Putri Ayu',
            'Rico Pradani',
            'Ani Fitriana',
            'Budi Eka',
            'Rama Santosa',
            'Dimas Santosa',
            'Ratna Budiman',
            'Andi Akbar',
            'Santi Pratama',
            'Hendro Santosa',
            'Rika Sentosa',
            'Firman Saputra',
            'Lina angraini',
            'Ari Saputra',
            'Nia Rahmawati',
            'Surya Eka',
            'Lia Angraini',
        ];

        $initialUserId = 8;
        $initialNik = 3576014403940001;

        foreach ($names as $index => $name) {
            $username = strtolower(str_replace(' ', '', $name));

            DB::table('m_user')->insert([
                'user_id' => $initialUserId + $index,
                'level_id' => 4,
                'nik' => (string)($initialNik + $index),
                'username' => $username,
                'nama' => $name,
                'status' => 'selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ]);
        }

        DB::table('m_user')->insert([
            'level_id' => 4,
            'nik' => 3576014403940301,
            'username' => 'budiono',
            'nama' => 'budi',
            'status' => 'Menunggu Verifikasi',
            'status_hidup' => 'Hidup',
            'password' => Hash::make('12345')
        ]);
    }
}
