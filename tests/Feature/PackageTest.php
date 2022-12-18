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
}
