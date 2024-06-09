<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notif')->insert([
            [
                'id_notif' => 9,
                'user_id' => '3',
                'keterangan' => 'mangajukan diri sebagai penerima bantuan bansos',
                'tanggal_notif' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_notif' => 10,
                'user_id' => '3',
                'keterangan' => 'mangajukan diri sebagai penerima bantuan bansos',
                'tanggal_notif' => now(),
                'updated_at' => now(),
                'created_at' => now(),
            ],
        ]);
    }
}
