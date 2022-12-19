<?php

namespace Tests\Feature;

use App\Models\DetailPembeliModel;
use App\Models\PaketModel;
use App\Models\PaymentModel;
use App\Models\SubscribeModel;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class OrderTest extends TestCase
{
    use RefreshDatabase;
    use WithoutMiddleware;

    //  testOrderWeightLoss()
    public function testOrderWeightLoss()
    {

        Storage::fake('public');
        $image = UploadedFile::fake()->image('public/assets/img/about.jpg');

        $user = new User(
            [
                'name' => 'Test User',
                'email' => 'user@example.com',
                'password' => 'password',
            ],
        );

        $user->save();
        
        $package = new PaketModel(
            [
                'nama_paket' => 'Weight Loss Package',
                'deskripsi' => 'This is a test package',
                'harga_paket' => 99.99,
                'foto' => $image
            ],
        
        );

        $package->save();

        $response = $this->get('/order');

        $response->assertStatus(200);

        $response->assertSee('Weight Loss Package');

        $subscribe = new SubscribeModel(
            [
                'user_id' => $user->id,
                'paket_id' => $package->id,
            ],
        );

        $subscribe->save();

        $detail_pembeli = new DetailPembeliModel(
            [
                'nama' => 'Test User',
                'alamat' => 'Jl. Test',
                'no_telp_1' => '081234567890',
                'kode_pos' => '12345',
                'subscribe_id' => $subscribe->id,
            ]
        );

        $detail_pembeli->save();

        $payment = new PaymentModel(
            [
                'user_id' => $user->id,
                'subcription_id' => $subscribe->id,
                'status' => 0,
                'tagihan' => $package->harga_paket,

            ]
        );

        $payment->save();

        // cek in database
        $this->assertDatabaseHas('detail_pembeli', [
            'nama' => 'Test User',
            'alamat' => 'Jl. Test',
            'no_telp_1' => '081234567890',
            'kode_pos' => '12345',
            'subscribe_id' => $subscribe->id,
        ]);

        $this->assertDatabaseHas('payment', [
            'user_id' => $user->id,
            'subcription_id' => $subscribe->id,
            'status' => 0,
        ]);

        $this->assertDatabaseHas('subscribe', [
            'user_id' => $user->id,
            'paket_id' => $package->id,
        ]);

    }

    // testOrderWeightGainPackage()
    public function testOrderWeightGainPackage()
    {

        Storage::fake('public');
        $image = UploadedFile::fake()->image('public/assets/img/about.jpg');

        $user = new User(
            [
                'name' => 'Test User',
                'email' => 'user@example.com',
                'password' => 'password',
            ],
        );

        $user->save();

        $package = new PaketModel(
            [
                'nama_paket' => 'Weight Gain Package',
                'deskripsi' => 'This is a test package',
                'harga_paket' => 99.99,
                'foto' => $image
            ],
        );

        $package->save();

        $response = $this->get('/order');

        $response->assertStatus(200);

        $response->assertSee('Weight Gain Package');

        $subscribe = new SubscribeModel(
            [
                'user_id' => $user->id,
                'paket_id' => $package->id,
            ],
        );

        $subscribe->save();

        $detail_pembeli = new DetailPembeliModel(
            [
                'nama' => 'Test User',
                'alamat' => 'Jl. Test',
                'no_telp_1' => '081234567890',
                'kode_pos' => '12345',
                'subscribe_id' => $subscribe->id,
            ]
        );

        $detail_pembeli->save();

        $payment = new PaymentModel(
            [
                'user_id' => $user->id,
                'subcription_id' => $subscribe->id,
                'status' => 0,
                'tagihan' => $package->harga_paket,

            ]
        );

        $payment->save();

        // cek in database

        $this->assertDatabaseHas('detail_pembeli', [
            'nama' => 'Test User',
            'alamat' => 'Jl. Test',
            'no_telp_1' => '081234567890',
            'kode_pos' => '12345',
            'subscribe_id' => $subscribe->id,
        ]);

        $this->assertDatabaseHas('payment', [
            'user_id' => $user->id,
            'subcription_id' => $subscribe->id,
            'status' => 0,
        ]);

        $this->assertDatabaseHas('subscribe', [
            'user_id' => $user->id,
            'paket_id' => $package->id,
        ]);

    }

    // testOrderMuscleGainPackage()
    public function testOrderMuscleGainPackage()
    {

        Storage::fake('public');
        $image = UploadedFile::fake()->image('public/assets/img/about.jpg');

        $user = new User(
            [
                'name' => 'Test User',
                'email' => 'user@example.com',
                'password' => 'password',
            ],
        );

        $user->save();

        $package = new PaketModel(
            [
                'nama_paket' => 'Muscle Gain Package',
                'deskripsi' => 'This is a test package',
                'harga_paket' => 99.99,
                'foto' => $image
            ],
        );

        $package->save();

        $response = $this->get('/order');

        $response->assertStatus(200);

        $response->assertSee('Muscle Gain Package');

        $subscribe = new SubscribeModel(
            [
                'user_id' => $user->id,
                'paket_id' => $package->id,
            ],
        );

        $subscribe->save();

        $detail_pembeli = new DetailPembeliModel(
            [
                'nama' => 'Test User',
                'alamat' => 'Jl. Test',
                'no_telp_1' => '081234567890',
                'kode_pos' => '12345',
                'subscribe_id' => $subscribe->id,
            ]
        );

        $detail_pembeli->save();

        $payment = new PaymentModel(
            [
                'user_id' => $user->id,
                'subcription_id' => $subscribe->id,
                'status' => 0,
                'tagihan' => $package->harga_paket,

            ]
        );

        $payment->save();

        // cek in database
        $this->assertDatabaseHas('detail_pembeli', [
            'nama' => 'Test User',
            'alamat' => 'Jl. Test',
            'no_telp_1' => '081234567890',
            'kode_pos' => '12345',
            'subscribe_id' => $subscribe->id,
        ]);

        $this->assertDatabaseHas('payment', [
            'user_id' => $user->id,
            'subcription_id' => $subscribe->id,
            'status' => 0,
        ]);

        $this->assertDatabaseHas('subscribe', [
            'user_id' => $user->id,
            'paket_id' => $package->id,
        ]);

    }
}
