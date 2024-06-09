<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
                'nik' => '357305001',
                'username' => 'Admin',
                'nama' => 'Admin',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 2,
                'level_id' => 2,
                'nik' => '357305002',
                'username' => 'RW',
                'nama' => 'Sudiono',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 3,
                'level_id' => 3,
                'nik' => '357305003',
                'username' => 'RT01',
                'nama' => 'Wahyu',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 4,
                'level_id' => 4,
                'nik' => '357305004',
                'username' => 'silfi',
                'nama' => 'Silfi Nazarina',
                'status' => 'Menunggu Perlengkapan',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 5,
                'level_id' => 4,
                'nik' => '357305005',
                'username' => 'yatno',
                'nama' => 'Yatno',
                'status' => 'Ditolak',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 6,
                'level_id' => 4,
                'nik' => '357305006',
                'username' => 'yoan',
                'nama' => 'Yoan',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 7,
                'level_id' => 4,
                'nik' => '357305007',
                'username' => 'makmur',
                'nama' => 'Makmur',
                'status' => 'Menunggu Verifikasi',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 8,
                'level_id' => 4,
                'nik' => '1234567890123450', // Sesuaikan dengan nik dari data bansos
                'username' => 'PutriHandayani',
                'nama' => 'Putri Handayani',
                'status' => 'Menunggu Perlengkapan', // Sesuai permintaan
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 9,
                'level_id' => 4,
                'nik' => '1234567890123451', // Sesuaikan dengan nik dari data bansos
                'username' => 'AhmadSantoso',
                'nama' => 'Ahmad Santoso',
                'status' => 'Menunggu Perlengkapan', // Sesuai permintaan
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 10,
                'level_id' => 4,
                'nik' => '1234567890123452', // Sesuaikan dengan nik dari data bansos
                'username' => 'SitiAminah',
                'nama' => 'Siti Aminah',
                'status' => 'Menunggu Perlengkapan', // Sesuai permintaan
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 11,
                'level_id' => 4,
                'nik' => '1234567890123453', // Sesuaikan dengan nik dari data bansos
                'username' => 'IrfanPratama',
                'nama' => 'Irfan Pratama',
                'status' => 'Menunggu Perlengkapan', // Sesuai permintaan
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 12,
                'level_id' => 4,
                'nik' => '1234567890123454', // Sesuaikan dengan nik dari data bansos
                'username' => 'DewiLestari',
                'nama' => 'Dewi Lestari',
                'status' => 'Menunggu Perlengkapan', // Sesuai permintaan
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 13,
                'level_id' => 4,
                'nik' => '1234567890123455', // Sesuaikan dengan nik dari data bansos
                'username' => 'BudiSetiawan',
                'nama' => 'Budi Setiawan',
                'status' => 'Menunggu Perlengkapan', // Sesuai permintaan
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 14,
                'level_id' => 4,
                'nik' => '1234567890123456', // Sesuaikan dengan nik dari data bansos
                'username' => 'RiniWulandari',
                'nama' => 'Rini Wulandari',
                'status' => 'Menunggu Perlengkapan', // Sesuai permintaan
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 15,
                'level_id' => 4,
                'nik' => '1234567890123457', // Sesuaikan dengan nik dari data bansos
                'username' => 'DediKurniawan',
                'nama' => 'Dedi Kurniawan',
                'status' => 'Menunggu Perlengkapan', // Sesuai permintaan
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 16,
                'level_id' => 4,
                'nik' => '1234567890123458', // Sesuaikan dengan nik dari data bansos
                'username' => 'AnitaSari',
                'nama' => 'Anita Sari',
                'status' => 'Menunggu Perlengkapan', // Sesuai permintaan
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 17,
                'level_id' => 4,
                'nik' => '1234567890123459', // Sesuaikan dengan nik dari data bansos
                'username' => 'AhmadBudiman',
                'nama' => 'Ahmad Budiman',
                'status' => 'Menunggu Perlengkapan', // Sesuai permintaan
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 18,
                'level_id' => 3,
                'nik' => '357305008',
                'username' => 'RT02',
                'nama' => 'budiyanti',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 19,
                'level_id' => 4,
                'nik' => '357305009',
                'username' => 'BudiSantoso',
                'nama' => 'Budi Santoso',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 20,
                'level_id' => 4,
                'nik' => '357305010',
                'username' => 'SitiAminah',
                'nama' => 'Siti Aminah',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 21,
                'level_id' => 4,
                'nik' => '357305011',
                'username' => 'AndiPratama',
                'nama' => 'Andi Pratama',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 22,
                'level_id' => 4,
                'nik' => '357305012',
                'username' => 'DewiLestari',
                'nama' => 'Dewi Lestari',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 23,
                'level_id' => 4,
                'nik' => '357305013',
                'username' => 'AgusWibowo',
                'nama' => 'Agus Wibowo',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 24,
                'level_id' => 4,
                'nik' => '357305014',
                'username' => 'RinaPuspitasari',
                'nama' => 'Rina Puspitasari',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 25,
                'level_id' => 4,
                'nik' => '357305015',
                'username' => 'DediSupriyadi',
                'nama' => 'Dedi Supriyadi',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 26,
                'level_id' => 4,
                'nik' => '357305016',
                'username' => 'IntanPermata',
                'nama' => 'Intan Permata',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 27,
                'level_id' => 4,
                'nik' => '357305017',
                'username' => 'JokoSusanto',
                'nama' => 'Joko Susanto',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 28,
                'level_id' => 4,
                'nik' => '357305018',
                'username' => 'MayaSari',
                'nama' => 'Maya Sari',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 29,
                'level_id' => 4,
                'nik' => '357305019',
                'username' => 'Fighaz',
                'nama' => 'SofiSugiharto',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 30,
                'level_id' => 4,
                'nik' => '357305020',
                'username' => 'Byan',
                'nama' => 'Byan Nur Cahyo',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],







            [
                'user_id' => 31,
                'level_id' => 4,
                'nik' => '357305021',
                'username' => 'HendraWijaya',
                'nama' => 'Hendra Wijaya',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 32,
                'level_id' => 4,
                'nik' => '357305022',
                'username' => 'FitriHandayani',
                'nama' => 'Fitri Handayani',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 33,
                'level_id' => 4,
                'nik' => '357305023',
                'username' => 'IrwanSetiawan',
                'nama' => 'Irwan Setiawan',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 34,
                'level_id' => 4,
                'nik' => '357305024',
                'username' => 'DianPurnama',
                'nama' => 'Dian Purnama',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 35,
                'level_id' => 4,
                'nik' => '357305025',
                'username' => 'AriefRahman',
                'nama' => 'Arief Rahman',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 36,
                'level_id' => 4,
                'nik' => '357305026',
                'username' => 'YuliAstuti',
                'nama' => 'Yuli Astuti',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 37,
                'level_id' => 4,
                'nik' => '357305027',
                'username' => 'BambangHartono',
                'nama' => 'Bambang Hartono',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 38,
                'level_id' => 4,
                'nik' => '357305028',
                'username' => 'RatnaDewi',
                'nama' => 'Ratna Dewi',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 39,
                'level_id' => 4,
                'nik' => '357305029',
                'username' => 'TeguhKurniawan',
                'nama' => 'Teguh Kurniawan',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 40,
                'level_id' => 4,
                'nik' => '357305030',
                'username' => 'LilisSusanti',
                'nama' => 'Lilis Susanti',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],








            [
                'user_id' => 41,
                'level_id' => 4,
                'nik' => '357305031',
                'username' => 'FajarNugroho',
                'nama' => 'Fajar Nugroho',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 42,
                'level_id' => 4,
                'nik' => '357305032',
                'username' => 'RiniMarlina',
                'nama' => 'Rini Marlina',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 43,
                'level_id' => 4,
                'nik' => '357305033',
                'username' => 'WahyuHidayat',
                'nama' => 'Wahyu Hidayat',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 44,
                'level_id' => 4,
                'nik' => '357305034',
                'username' => 'SriWahyuni',
                'nama' => 'Sri Wahyuni',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 45,
                'level_id' => 4,
                'nik' => '357305035',
                'username' => 'YogaPratama',
                'nama' => 'Yoga Pratama',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 46,
                'level_id' => 4,
                'nik' => '357305036',
                'username' => 'LestariPurwanti',
                'nama' => 'Lestari Purwanti',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 47,
                'level_id' => 4,
                'nik' => '357305037',
                'username' => 'AsepKurnia',
                'nama' => 'Asep Kurnia',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 48,
                'level_id' => 4,
                'nik' => '357305038',
                'username' => 'NurulHidayati',
                'nama' => 'Nurul Hidayati',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 49,
                'level_id' => 4,
                'nik' => '357305039',
                'username' => 'BayuWicaksono',
                'nama' => 'Bayu Wicaksono',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 50,
                'level_id' => 4,
                'nik' => '357305040',
                'username' => 'SusiSetiani',
                'nama' => 'Susi Setiani',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],








            [
                'user_id' => 51,
                'level_id' => 4,
                'nik' => '357305041',
                'username' => 'AdityaPurnama',
                'nama' => 'Aditya Purnama',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 52,
                'level_id' => 4,
                'nik' => '357305042',
                'username' => 'TriWahyuni',
                'nama' => 'Tri Wahyuni',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 53,
                'level_id' => 4,
                'nik' => '357305043',
                'username' => 'FaisalAnwar',
                'nama' => 'Faisal Anwar',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 54,
                'level_id' => 4,
                'nik' => '357305044',
                'username' => 'MelatiSari',
                'nama' => 'Melati Sari',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 55,
                'level_id' => 4,
                'nik' => '357305045',
                'username' => 'GunawanSantoso',
                'nama' => 'Gunawan Santoso',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 56,
                'level_id' => 4,
                'nik' => '357305046',
                'username' => 'IndahPutri',
                'nama' => 'Indah Putri',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 57,
                'level_id' => 4,
                'nik' => '357305047',
                'username' => 'RizkiMaulana',
                'nama' => 'Rizki Maulana',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 58,
                'level_id' => 4,
                'nik' => '357305048',
                'username' => 'DiahKusuma',
                'nama' => 'Diah Kusuma',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 59,
                'level_id' => 4,
                'nik' => '357305049',
                'username' => 'YudiPrasetyo',
                'nama' => 'Yudi Prasetyo',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
            [
                'user_id' => 60,
                'level_id' => 4,
                'nik' => '357305050',
                'username' => 'PutriAnggraeni',
                'nama' => 'Putri Anggraeni',
                'status' => 'Selesai',
                'status_hidup' => 'Hidup',
                'password' => Hash::make('12345')
            ],
        ];

        DB::table('m_user')->insert($data);
    }
}
