<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserLoginTest extends TestCase
{
    use RefreshDatabase;

    // function to test login
    public function testLogin()
    {
        // Set up the necessary data
        $user = new User([
            'name' => 'User Test',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
        ]);
        $user->save();

        // Send a request to log in
        $response = $this->post('/login', [
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
        ]);

        // Assert that the user was logged in
        $response->assertStatus(302);
        // $this->assertAuthenticatedAs($user);
    }

    /// function to test login with wrong password
    public function testLoginWithWrongPassword()
    {
        $user = User::factory()->create([
            'email' => 'user@example.com',
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
            'email' => 'user@example.com',
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
            'email' => 'user@example.com',
            'password' => bcrypt('secret'),
        ]);

        $response = $this->post('/login', [
            'email' => 'wrong_email',
            'password' => 'wrong_password',
        ]);

        $response->assertStatus(302);
    }
}
