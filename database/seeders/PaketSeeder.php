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
            'foto' => 'paket-1.jpg',
        ]);
    }
}
