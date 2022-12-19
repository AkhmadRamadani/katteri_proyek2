<?php

namespace Tests\Feature;

use App\Models\MenuModel;
use App\Models\PaketModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class MenuListTest extends TestCase
{
    use RefreshDatabase;

    public function testMenuList()
    {
        $response = $this->get('/menu-list');

        $response->assertStatus(200);
    }

    // test menu detail Weight Loss Package
    public function testMenuDetailWeightLoss()
    {

        Storage::fake('public');
        $image = UploadedFile::fake()->image('public/assets/img/about.jpg');
        $package = new PaketModel(
            [
                'nama_paket' => 'Weight Loss Package',
                'deskripsi' => 'This is a test package',
                'harga_paket' => 99.99,
                'foto' => $image
            ],
        );
        $package->save();

        $response = $this->get('/menu-list');

        $response->assertStatus(200);

        $response->assertSee('Weight Loss Package');


    }

    // test menu detail Muscle Gain Package
    public function testMenuDetailMuscleGain()
    {

        Storage::fake('public');
        $image = UploadedFile::fake()->image('public/assets/img/about.jpg');
        $package = new PaketModel(
          
            [
                'nama_paket' => 'Muscle Gain Package',
                'deskripsi' => 'This is a test package',
                'harga_paket' => 99.99,
                'foto' => $image
            ],
        );
        $package->save();

        $response = $this->get('/menu-list');

        $response->assertStatus(200);

        $response->assertSee('Muscle Gain Package');
    }

    // test menu detail Weight Gain Package
    public function testMenuDetailWeightGain()
    {

        Storage::fake('public');
        $image = UploadedFile::fake()->image('public/assets/img/about.jpg');
        $package = new PaketModel(
           
            [
                'nama_paket' => 'Weight Gain Package',
                'deskripsi' => 'This is a test package',
                'harga_paket' => 99.99,
                'foto' => $image
            ]
        );
        $package->save();

        $response = $this->get('/menu-list');

        $response->assertStatus(200);

        $response->assertSee('Weight Gain Package');
    }

}
