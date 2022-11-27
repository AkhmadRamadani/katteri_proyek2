<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'nama_menu' => 'Nasi Goreng',
            'deskripsi' => 'Nasi Goreng Biasa dengan telur dan ayam goreng yang digoreng bersama nasi putih yang sudah dihaluskan dan diiris-iris kecil',
            'qr_code' => 'nasi-goreng.png',
            'foto' => 'nasi-goreng.jpg',
            'nutrition_facts' => ' <html>
            <head>
                <title>My First Web Page</title>
            </head>
            <body>
                <h1>Hello World!</h1>
                <p>This is my first web page.</p>
            </body>
            
            </html>',
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Nasi Goreng Spesial',
            'deskripsi' => 'Nasi Goreng Biasa dengan telur dan ayam goreng yang digoreng bersama nasi putih yang sudah dihaluskan dan diiris-iris kecil',
            'qr_code' => 'nasi-goreng-spesial.png',
            'foto' => 'nasi-goreng-spesial.jpg',
            'nutrition_facts' => ' <html>
            <head>
                <title>My First Web Page</title>
            </head>
            <body>
                <h1>Hello World!</h1>
                <p>This is my first web page.</p>
            </body>
            
            </html>',
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Nasi Goreng Apa Aja',
            'deskripsi' => 'Nasi Goreng Biasa dengan telur dan ayam goreng yang digoreng bersama nasi putih yang sudah dihaluskan dan diiris-iris kecil',
            'qr_code' => 'nasi-goreng-spesial.png',
            'foto' => 'nasi-goreng-spesial.jpg',
            'nutrition_facts' => ' <html>
            <head>
                <title>My First Web Page</title>
            </head>
            <body>
                <h1>Hello World!</h1>
                <p>This is my first web page.</p>
            </body>
            
            </html>',
        ]);

        DB::table('menu')->insert([
            'nama_menu' => 'Nasi Goreng Biasa',
            'deskripsi' => 'Nasi Goreng Biasa dengan telur dan ayam goreng yang digoreng bersama nasi putih yang sudah dihaluskan dan diiris-iris kecil',
            'qr_code' => 'nasi-goreng-spesial.png',
            'foto' => 'nasi-goreng-spesial.jpg',
            'nutrition_facts' => ' <html>
            <head>
                <title>My First Web Page</title>
            </head>
            <body>
                <h1>Hello World!</h1>
                <p>This is my first web page.</p>
            </body>
            
            </html>',
        ]);
    }
}
