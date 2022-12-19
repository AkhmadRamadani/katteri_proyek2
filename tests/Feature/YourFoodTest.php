<?php

namespace Tests\Feature;

use App\Http\Controllers\Auth\LoginController;
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

class YourFoodTest extends TestCase
{
    use RefreshDatabase;

    public function testYourFoodBeforeOrder()
    {
        $user = new User();

        $user->name = 'John Doe';
        $user->email = 'john@example.com';
        $user->password = bcrypt('password');
        $user->save();
        
        /// login with set session
        $this->actingAs($user);

        $response = $this->get('/your-food');

        $response->assertStatus(200);

        $response->assertSee('Kamu belum berlangganan!');
    }

    public function testYourFoodAfterOrder()
    {

        Storage::fake('public');
        $image = UploadedFile::fake()->image('public/assets/img/about.jpg');

        $user = new User();

        $user->name = 'John Doe';
        $user->email = 'john@example.com';
        $user->password = bcrypt('password');
        $user->save();
        
        /// login with set session
        $this->actingAs($user);


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
                'status' => 2,
                'tagihan' => $package->harga_paket,
                'bukti_pembayaran' => $image,
            ]
        );

        $payment->save();

        /// cek in database
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
            'status' => 2,
            'tagihan' => $package->harga_paket,
            'bukti_pembayaran' => $image,
        ]);

        $this->assertDatabaseHas('subscribe', [
            'user_id' => $user->id,
            'paket_id' => $package->id,
        ]);
        
        $response = $this->get('/your-food');

        $response->assertStatus(200);

        $response->assertSee('Weight Loss Package');
    }
}
