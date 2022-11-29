<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paket')->insert([
            'nama_paket' => 'Weight Loss Package',
            'deskripsi' => 'Paket ini cocok untuk kamu yang ingin menurunkan berat badan dengan cara yang sehat dan alami',
            'harga_paket' => 100000,
            'foto' => 'assets/img/events-1.jpg',
        ]);
        DB::table('paket')->insert([
            'nama_paket' => 'Weight Gain Package',
            'deskripsi' => 'Paket ini cocok untuk kamu yang ingin menambah berat badan dengan cara yang sehat dan alami',
            'harga_paket' => 100000,
            'foto' => 'assets/img/events-2.jpg',
        ]);
        DB::table('paket')->insert([
            'nama_paket' => 'Muscle Gain Package',
            'deskripsi' => 'Paket ini cocok untuk kamu yang ingin menambah massa otot dengan cara yang sehat dan alami',
            'harga_paket' => 100000,
            'foto' => 'assets/img/events-3.jpg',
        ]);
    }
}
