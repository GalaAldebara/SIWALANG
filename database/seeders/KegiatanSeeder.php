<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_kegiatan' => 'Kerja Bakti Bersama Warga RW.01',
                'tanggal_kegiatan' => Carbon::now(),
                'deskripsi_kegiatan' => 'Dalam rangka menjaga kebersihan desa dan sudah menjadi agenda rutin setiap 3 bulan sekali, dengan ini kami mengundang bapak/saudara untuk menghadiri kegiatan ini pada:',
                'hari' => Carbon::now()->isoFormat('dddd'),
                'jam_mulai' => '07:00',
                'jam_selesai' => '08:30',
                'lokasi' => 'Jalan Raya Poros Lang-Lang 1',
                'dokumentasi' => null,
                'status_kegiatan' => 'belum selesai',
            ],
            [
                'nama_kegiatan' => 'Kerja Bakti Bersama Warga RW.02',
                'tanggal_kegiatan' => Carbon::now(),
                'deskripsi_kegiatan' => 'Dalam rangka menjaga kebersihan desa dan sudah menjadi agenda rutin setiap 3 bulan sekali, dengan ini kami mengundang bapak/saudara untuk menghadiri kegiatan ini pada:',
                'hari' => Carbon::now()->isoFormat('dddd'),
                'jam_mulai' => '07:00',
                'jam_selesai' => '08:30',
                'lokasi' => 'Jalan Raya Poros Lang-Lang 1',
                'dokumentasi' => null,
                'status_kegiatan' => 'belum selesai',
            ],
            [
                'nama_kegiatan' => 'Kerja Bakti Bersama Warga RW.03',
                'tanggal_kegiatan' => Carbon::now(),
                'deskripsi_kegiatan' => 'Dalam rangka menjaga kebersihan desa dan sudah menjadi agenda rutin setiap 3 bulan sekali, dengan ini kami mengundang bapak/saudara untuk menghadiri kegiatan ini pada:',
                'hari' => Carbon::now()->isoFormat('dddd'),
                'jam_mulai' => '07:00',
                'jam_selesai' => '08:30',
                'lokasi' => 'Jalan Raya Poros Lang-Lang 1',
                'dokumentasi' => null,
                'status_kegiatan' => 'belum selesai',
            ],
            [
                'nama_kegiatan' => 'Upacara Hari Kemerdekaan HUT RI ke-78',
                'tanggal_kegiatan' => Carbon::now(),
                'deskripsi_kegiatan' => 'Dalam rangka memperingati kemerdekaan Indonesia ke-78, dengan ini kami mengundang bapak/saudara untuk menghadiri kegiatan ini pada:',
                'hari' => Carbon::now()->isoFormat('dddd'),
                'jam_mulai' => '07:00',
                'jam_selesai' => '08:30',
                'lokasi' => 'Jalan Raya Poros Lang-Lang 1',
                'dokumentasi' => 'upacara.png',
                'status_kegiatan' => 'selesai',
            ],
            [
                'nama_kegiatan' => 'Kerja Bakti Bersama Warga RW.04',
                'tanggal_kegiatan' => Carbon::now(),
                'deskripsi_kegiatan' => 'Dalam rangka menjaga kebersihan desa dan sudah menjadi agenda rutin setiap 3 bulan sekali, dengan ini kami mengundang bapak/saudara untuk menghadiri kegiatan ini pada:',
                'hari' => Carbon::now()->isoFormat('dddd'),
                'jam_mulai' => '07:00',
                'jam_selesai' => '09:00',
                'lokasi' => 'Jalan Raya Poros Lang-Lang 1',
                'dokumentasi' => 'kerja-bakti.png',
                'status_kegiatan' => 'selesai',
            ],
            [
                'nama_kegiatan' => 'Kerja Bakti Bersama Warga RW.05',
                'tanggal_kegiatan' => Carbon::now(),
                'deskripsi_kegiatan' => 'Dalam rangka menjaga kebersihan desa dan sudah menjadi agenda rutin setiap 3 bulan sekali, dengan ini kami mengundang bapak/saudara untuk menghadiri kegiatan ini pada:',
                'hari' => Carbon::now()->isoFormat('dddd'),
                'jam_mulai' => '07:00',
                'jam_selesai' => '08:30',
                'lokasi' => 'Jalan Raya Poros Lang-Lang 1',
                'dokumentasi' => null,
                'status_kegiatan' => 'belum selesai',
            ],
            [
                'nama_kegiatan' => 'Karnaval HUT RI ke-78',
                'tanggal_kegiatan' => Carbon::now(),
                'deskripsi_kegiatan' => 'Dalam rangka memperingati kemerdekaan Indonesia ke-78, dengan ini kami mengundang bapak/saudara untuk menghadiri kegiatan ini pada:',
                'hari' => Carbon::now()->isoFormat('dddd'),
                'jam_mulai' => '07:00',
                'jam_selesai' => '08:30',
                'lokasi' => 'Jalan Raya Poros Lang-Lang 1',
                'dokumentasi' => 'karnaval.png',
                'status_kegiatan' => 'selesai',
            ],
        ];
        DB::table('kegiatan')->insert($data);
    }
}
