<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalMakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwal_makanan')->insert([
            'hari_id' => 1,
            'menu_id' => 1,
            'paket_id' => 1,
        ]);
        DB::table('jadwal_makanan')->insert([
            'hari_id' => 2,
            'menu_id' => 2,
            'paket_id' => 1,
        ]);
        DB::table('jadwal_makanan')->insert([
            'hari_id' => 3,
            'menu_id' => 3,
            'paket_id' => 1,
        ]);
        DB::table('jadwal_makanan')->insert([
            'hari_id' => 4,
            'menu_id' => 4,
            'paket_id' => 1,
        ]);
        
    }
}
