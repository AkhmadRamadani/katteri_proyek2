<?php

namespace Tests\Feature;

use App\Models\MenuModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Tests\TestCase;

class MenuTest extends TestCase
{
    use RefreshDatabase;
    use WithoutMiddleware;
    // create menu using valid data
    public function testCreateMenu()
    {
        Storage::fake('public');
        $image = UploadedFile::fake()->image('public/assets/img/about.jpg');

        $response = $this->post('/admin/menu', [
            'nama_menu' => 'Menu 1',
            'deskripsi_menu' => 'This is a test menu',
            'nutrition_facts' => 'This is a test nutrition facts',
            'foto' => $image,
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/admin/menu');

        $output_file = 'qr_codes/qr-' . time() . '.png';
        
        $qr_generated = Storage::disk('public')->exists($output_file);
        
        $this->assertTrue($qr_generated);

        $this->assertDatabaseHas('menu', [
            'nama_menu' => 'Menu 1',
            'deskripsi' => 'This is a test menu',
            'nutrition_facts' => 'This is a test nutrition facts',
            'qr_code' => $output_file,
        ]);
    }

    // create menu wihtout image
    public function testCreateMenuWithoutImage()
    {
        $response = $this->post('/admin/menu', [
            'nama_menu' => 'Menu 1',
            'deskripsi_menu' => 'This is a test menu',
            'nutrition_facts' => 'This is a test nutrition facts',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/admin/menu');

        $this->assertDatabaseHas('menu', [
            'nama_menu' => 'Menu 1',
            'deskripsi' => 'This is a test menu',
            'nutrition_facts' => 'This is a test nutrition facts',
        ]);
    }

    // update menu using valid data
    public function testUpdateMenu()
    {
        Storage::fake('public');
        $image = UploadedFile::fake()->image('public/assets/img/about.jpg');

        $menu = new MenuModel();
        $menu->nama_menu = 'Menu 1';
        $menu->deskripsi = 'This is a test menu';
        $menu->nutrition_facts = 'This is a test nutrition facts';
        $menu->foto = $image;

        $menu->save();

        $response = $this->put('/admin/menu/'. $menu->id, [
            'nama_menu' => 'Menu 2',
            'deskripsi_menu' => 'This is a test menu 2',
            'nutrition_facts' => 'This is a test nutrition facts 2',
            'foto' => $image,
        ]);

        $this->assertDatabaseHas('menu', [
            'nama_menu' => 'Menu 2',
            'deskripsi' => 'This is a test menu 2',
            'nutrition_facts' => 'This is a test nutrition facts 2',
        ]);
    }

    // check if menu list is showed
    public function testMenuList()
    {
        Storage::fake('public');
        $image = UploadedFile::fake()->image('public/assets/img/about.jpg');

        $menu = new MenuModel();
        $menu->nama_menu = 'Menu 1';
        $menu->deskripsi = 'This is a test menu';
        $menu->nutrition_facts = 'This is a test nutrition facts';
        $menu->foto = $image;

        $menu->save();

        $response = $this->get('/admin/menu');

        $response->assertSee('Menu 1');
    }

    // check delete menu
    public function testDeleteMenu()
    {
        Storage::fake('public');
        $image = UploadedFile::fake()->image('public/assets/img/about.jpg');

        $menu = new MenuModel();
        $menu->nama_menu = 'Menu 1';
        $menu->deskripsi = 'This is a test menu';
        $menu->nutrition_facts = 'This is a test nutrition facts';
        $menu->foto = $image;

        $menu->save();

        $response = $this->delete('/admin/menu/'. $menu->id);

        $response->assertStatus(302);
        $response->assertRedirect('/admin/menu');

        $this->assertDatabaseMissing('menu', [
            'nama_menu' => 'Menu 1',
            'deskripsi' => 'This is a test menu',
            'nutrition_facts' => 'This is a test nutrition facts',
        ]);
    }

    // check search menu
    public function testSearchMenu()
    {
        Storage::fake('public');
        $image = UploadedFile::fake()->image('public/assets/img/about.jpg');

        $menu = new MenuModel();
        $menu->nama_menu = 'Menu 1';
        $menu->deskripsi = 'This is a test menu';
        $menu->nutrition_facts = 'This is a test nutrition facts';
        $menu->foto = $image;

        $menu->save();

        $response = $this->get('/admin/menu?search=Menu 1');

        $response->assertSee('Menu 1');
    }

    public function testDetailMenu()
    {
        // Set up the necessary data
        Storage::fake('public');
        $image = UploadedFile::fake()->image('public/assets/img/about.jpg');

        $menu = new MenuModel();
        $menu->nama_menu = 'Menu 1';
        $menu->deskripsi = 'This is a test menu';
        $menu->nutrition_facts = 'This is a test nutrition facts';
        $menu->foto = $image;

        $menu->save();

        // Retrieve the menu using the Menu model
        $retrievedMenu = MenuModel::find($menu->id);

        // Assert that the menu was retrieved correctly
        $this->assertEquals($menu->nama_menu, $retrievedMenu->nama_menu);
        $this->assertEquals($menu->deskripsi, $retrievedMenu->deskripsi);
        $this->assertEquals($menu->foto, $retrievedMenu->foto);
    }

}
