<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_users')->insert([
            'user_id' => 1,
            'alamat' => 'Jl. Admin',
            'no_telp' => '081234567890',
            'foto' => 'default.jpg',
            'kode_pos' => '12345',
        ]);
    }
}
