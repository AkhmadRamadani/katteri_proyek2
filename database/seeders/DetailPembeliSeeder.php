<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_pembeli')->insert([
            'subscribe_id' => 1,
            'nama' => 'Rizky',
            'alamat' => 'Jl. Raya',
            'no_telp_1' => '081234567890',
            'no_telp_2' => '081234567890',
            'kode_pos' => '12345',
        ]);
    }
}
