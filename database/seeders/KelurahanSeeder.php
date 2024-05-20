<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelurahan = [
            ['nama_kelurahan' => 'Arjosari', 'kecamatan_id' => 1],
            ['nama_kelurahan' => 'Balearjosari', 'kecamatan_id' => 1],
            ['nama_kelurahan' => 'Blimbing', 'kecamatan_id' => 1],
            ['nama_kelurahan' => 'Bunulrejo', 'kecamatan_id' => 1],
            ['nama_kelurahan' => 'Jodipan', 'kecamatan_id' => 1],
            ['nama_kelurahan' => 'Kesatrian', 'kecamatan_id' => 1],
            ['nama_kelurahan' => 'Pandanwangi', 'kecamatan_id' => 1],
            ['nama_kelurahan' => 'Polehan', 'kecamatan_id' => 1],
            ['nama_kelurahan' => 'Polowijen', 'kecamatan_id' => 1],
            ['nama_kelurahan' => 'Purwantoro', 'kecamatan_id' => 1],
            ['nama_kelurahan' => 'Purwodadi', 'kecamatan_id' => 1],

            ['nama_kelurahan' => 'Arjowinangun', 'kecamatan_id' => 2],
            ['nama_kelurahan' => 'Bumiayu', 'kecamatan_id' => 2],
            ['nama_kelurahan' => 'Buring', 'kecamatan_id' => 2],
            ['nama_kelurahan' => 'Cemorokandang', 'kecamatan_id' => 2],
            ['nama_kelurahan' => 'Kedungkandang', 'kecamatan_id' => 2],
            ['nama_kelurahan' => 'Kotalama', 'kecamatan_id' => 2],
            ['nama_kelurahan' => 'Lesanpuro', 'kecamatan_id' => 2],
            ['nama_kelurahan' => 'Madyopuro', 'kecamatan_id' => 2],
            ['nama_kelurahan' => 'Mergosono', 'kecamatan_id' => 2],
            ['nama_kelurahan' => 'Sawojajar', 'kecamatan_id' => 2],
            ['nama_kelurahan' => 'Tlogowaru', 'kecamatan_id' => 2],
            ['nama_kelurahan' => 'Wonokoyo', 'kecamatan_id' => 2],

            ['nama_kelurahan' => 'Bareng', 'kecamatan_id' => 3],
            ['nama_kelurahan' => 'Gadingasri', 'kecamatan_id' => 3],
            ['nama_kelurahan' => 'Kasin', 'kecamatan_id' => 3],
            ['nama_kelurahan' => 'Kauman', 'kecamatan_id' => 3],
            ['nama_kelurahan' => 'Kiduldalem', 'kecamatan_id' => 3],
            ['nama_kelurahan' => 'Klojen', 'kecamatan_id' => 3],
            ['nama_kelurahan' => 'Oro-Oro Dowo', 'kecamatan_id' => 3],
            ['nama_kelurahan' => 'Penanggungan', 'kecamatan_id' => 3],
            ['nama_kelurahan' => 'Rampal Celaket', 'kecamatan_id' => 3],
            ['nama_kelurahan' => 'Samaan', 'kecamatan_id' => 3],
            ['nama_kelurahan' => 'Sukoharjo', 'kecamatan_id' => 3],

            ['nama_kelurahan' => 'Dinoyo', 'kecamatan_id' => 4],
            ['nama_kelurahan' => 'Jatimulyo', 'kecamatan_id' => 4],
            ['nama_kelurahan' => 'Ketawanggede', 'kecamatan_id' => 4],
            ['nama_kelurahan' => 'Lowokwaru', 'kecamatan_id' => 4],
            ['nama_kelurahan' => 'Merjosari', 'kecamatan_id' => 4],
            ['nama_kelurahan' => 'Mojolangu', 'kecamatan_id' => 4],
            ['nama_kelurahan' => 'Sumbersari', 'kecamatan_id' => 4],
            ['nama_kelurahan' => 'Tasikmadu', 'kecamatan_id' => 4],
            ['nama_kelurahan' => 'Tlogomas', 'kecamatan_id' => 4],
            ['nama_kelurahan' => 'Tulusrejo', 'kecamatan_id' => 4],
            ['nama_kelurahan' => 'Tunggulwulung', 'kecamatan_id' => 4],
            ['nama_kelurahan' => 'Tunjungsekar', 'kecamatan_id' => 4],

            ['nama_kelurahan' => 'Bakalankrajan', 'kecamatan_id' => 5],
            ['nama_kelurahan' => 'Bandulan', 'kecamatan_id' => 5],
            ['nama_kelurahan' => 'Bandungrejosari', 'kecamatan_id' => 5],
            ['nama_kelurahan' => 'Ciptomulyo', 'kecamatan_id' => 5],
            ['nama_kelurahan' => 'Gadang', 'kecamatan_id' => 5],
            ['nama_kelurahan' => 'Karangbesuki', 'kecamatan_id' => 5],
            ['nama_kelurahan' => 'Kebonsari', 'kecamatan_id' => 5],
            ['nama_kelurahan' => 'Mulyorejo', 'kecamatan_id' => 5],
            ['nama_kelurahan' => 'Pisangcandi', 'kecamatan_id' => 5],
            ['nama_kelurahan' => 'Sukun', 'kecamatan_id' => 5],
            ['nama_kelurahan' => 'Tanjungrejo', 'kecamatan_id' => 5],
        ];

        DB::table('kelurahan')->insert($kelurahan);
    }
}
