<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hari')->insert([
            'nama_hari' => 'Senin',
        ]);
        DB::table('hari')->insert([
            'nama_hari' => 'Selasa',
        ]);
        DB::table('hari')->insert([
            'nama_hari' => 'Rabu',
        ]);
        DB::table('hari')->insert([
            'nama_hari' => 'Kamis',
        ]);
        DB::table('hari')->insert([
            'nama_hari' => 'Jumat',
        ]);
        DB::table('hari')->insert([
            'nama_hari' => 'Sabtu',
        ]);
        DB::table('hari')->insert([
            'nama_hari' => 'Minggu',
        ]);
    }
}
