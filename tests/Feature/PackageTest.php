<?php

namespace Tests\Feature;

use App\Models\PaketModel;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class PackageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_create_a_package()
    {
        // $this->withoutExceptionHandling();
        Storage::fake('public');
        $image = UploadedFile::fake()->image('public/assets/img/about.jpg');

        // Set up the necessary data
        $data = [
            'nama_paket' => 'Test Package',
            'harga_paket' => 99.99,
            'deskripsi_paket' => 'This is a test package',
            'foto' => $image
        ];
        $response = $this->json('post', '/admin/paket', $data);
        $results = [
            'nama_paket' => $data['nama_paket'],
            'deskripsi' => $data['deskripsi_paket'],
        ];
        $this->assertDatabaseHas('paket', $results);
    }

    /** @test */
    public function a_user_can_create_a_package_without_an_image()
    {
        // $this->withoutExceptionHandling();
        Storage::fake('public');
        $image = UploadedFile::fake()->image('public/assets/img/about.jpg');

        // Set up the necessary data
        $data = [
            'nama_paket' => 'Test Package',
            'harga_paket' => 99.99,
            'deskripsi_paket' => 'This is a test package',
            // 'foto' => $image
        ];
        $response = $this->json('post', '/admin/paket', $data);
        $results = [
            'nama_paket' => $data['nama_paket'],
            'deskripsi' => $data['deskripsi_paket'],
        ];
        $this->assertDatabaseHas('paket', $results);
    }


    /** @test */
    public function a_user_can_view_a_package()
    {
        // Set up the necessary data
        $package = new PaketModel([
            'nama_paket' => 'Test Package',
            'deskripsi' => 'This is a test package',
            'harga_paket' => 99.99,
            'foto' => 'packages/Ie82vn4QEzOFUXrGlt58jMaNjrYm6BDe0ZYmErhA.jpg'
        ]);
        $package->save();

        // Retrieve the package using the Package model
        $retrievedPackage = PaketModel::find($package->id);

        // Assert that the package was retrieved correctly
        $this->assertEquals($package->nama_paket, $retrievedPackage->nama_paket);
        $this->assertEquals($package->deskripsi, $retrievedPackage->deskripsi);
        $this->assertEquals($package->harga_paket, $retrievedPackage->harga_paket);
        $this->assertEquals($package->foto, $retrievedPackage->foto);
    }

    /** @test */
    public function a_user_can_update_a_package()
    {

        Storage::fake('public');
        $image = UploadedFile::fake()->image('public/assets/img/about.jpg');

        // Set up the necessary data
        $package = new PaketModel([
            'nama_paket' => 'Test Package',
            'deskripsi' => 'This is a test package',
            'harga_paket' => 99.99,
            'foto' => 'packages/Ie82vn4QEzOFUXrGlt58jMaNjrYm6BDe0ZYmErhA.jpg'
        ]);
        $package->save();

        // Update the package using the Package model
        $package->nama_paket = 'Updated Package';
        $package->deskripsi = 'This is an updated test package';
        $package->harga_paket = 199.99;
        $package->foto = $image;
        $package->save();

        // Assert that the package was updated and stored in the database
        $this->assertDatabaseHas('paket', [
            'nama_paket' => 'Updated Package',
            'deskripsi' => 'This is an updated test package',
            'harga_paket' => 199.99,

        ]);
    }

    /** @test */
    public function a_user_can_delete_a_package()
    {
        // Set up the necessary data
        $package = new PaketModel([
            'nama_paket' => 'Test Package',
            'deskripsi' => 'This is a test package',
            'harga_paket' => 99.99,
            'foto' => 'packages/Ie82vn4QEzOFUXrGlt58jMaNjrYm6BDe0ZYmErhA.jpg'
        ]);
        $package->save();

        // Delete the package using the Package model
        $package->delete();

        // Assert that the package was deleted and removed from the database
        $this->assertDatabaseMissing('paket', ['id' => $package->id]);
    }

    /** @test */
    public function a_user_can_view_all_packages()
    {
        // Set up the necessary data
        $package1 = new PaketModel([
            'nama_paket' => 'Test Package 1',
            'deskripsi' => 'This is a test package',
            'harga_paket' => 99.99,
            'foto' => 'packages/Ie82vn4QEzOFUXrGlt58jMaNjrYm6BDe0ZYmErhA.jpg'
        ]);
        $package1->save();

        $package2 = new PaketModel([
            'nama_paket' => 'Test Package 2',
            'deskripsi' => 'This is a test package',
            'harga_paket' => 99.99,
            'foto' => 'packages/Ie82vn4QEzOFUXrGlt58jMaNjrYm6BDe0ZYmErhA.jpg'
        ]);
        $package2->save();

        // Retrieve all packages using the Package model
        $retrievedPackages = PaketModel::all();

        // Assert that the packages were retrieved correctly
        $this->assertEquals($package1->nama_paket, $retrievedPackages[0]->nama_paket);
        $this->assertEquals($package1->deskripsi, $retrievedPackages[0]->deskripsi);
        $this->assertEquals($package1->harga_paket, $retrievedPackages[0]->harga_paket);
        $this->assertEquals($package1->foto, $retrievedPackages[0]->foto);

        $this->assertEquals($package2->nama_paket, $retrievedPackages[1]->nama_paket);
        $this->assertEquals($package2->deskripsi, $retrievedPackages[1]->deskripsi);
        $this->assertEquals($package2->harga_paket, $retrievedPackages[1]->harga_paket);
        $this->assertEquals($package2->foto, $retrievedPackages[1]->foto);
    }

    /** @test */
    // check search menu
    public function a_user_can_search_package()
    {
        Storage::fake('public');
        $image = UploadedFile::fake()->image('public/assets/img/about.jpg');


        $package1 = new PaketModel([
            'nama_paket' => 'Test Package 1',
            'deskripsi' => 'This is a test package',
            'harga_paket' => 99.99,
            'foto' => 'packages/Ie82vn4QEzOFUXrGlt58jMaNjrYm6BDe0ZYmErhA.jpg'
        ]);
        $package1->save();

        $response = $this->get('/admin/paket?search=package 1');

        $response->assertSee('Test Package 1');
    }
}
