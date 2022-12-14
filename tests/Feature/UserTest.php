<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class UserTest extends TestCase
{
    use WithoutMiddleware;
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    // function to test login
    public function testLogin()
    {   
        $user = User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => bcrypt('secret'),
        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => bcrypt('secret')
        ]);

        $response->assertStatus(302);
        
    }
    
    /// function to test login with wrong password
    public function testLoginWithWrongPassword()
    {
        $user = User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => bcrypt('secret'),
        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong_password',
        ]);

        $response->assertStatus(302);
    }

    /// function to test login with wrong email
    public function testLoginWithWrongEmail()
    {
        $user = User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => bcrypt('secret'),
        ]);

        $response = $this->post('/login', [
            'email' => 'wrong_email',
            'password' => bcrypt('secret'),
        ]);

        $response->assertStatus(302);

    }

    /// function to test login with wrong email and password
    public function testLoginWithWrongEmailAndPassword()
    {
        $user = User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => bcrypt('secret'),
        ]);

        $response = $this->post('/login', [
            'email' => 'wrong_email',
            'password' => 'wrong_password',
        ]);

        $response->assertStatus(302);

    }
    
}
