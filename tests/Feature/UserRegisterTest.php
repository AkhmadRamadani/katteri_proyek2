<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserRegisterTest extends TestCase
{
    use RefreshDatabase;

    public function testRegister()
    {
        $response = $this->post('/register', [
            'name' => 'User Test',
            'email' => 'user@example.com',

            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertStatus(302);

        $this->assertDatabaseHas('users', [
            'name' => 'User Test',
            'email' => 'user@example.com',
        ]);

        $this->assertAuthenticated();
    }

    // test register with invalid email
    public function testRegisterWithInvalidEmail()
    {
        $response = $this->post('/register', [
            'name' => 'User Test',
            'email' => 'userexample.com',

            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertStatus(302);
    }

    // test register with invalid password
    public function testRegisterWithInvalidPassword()
    {
        $response = $this->post('/register', [
            'name' => 'User Test',
            'email' => 'user@example.com',
            'password' => 'pass',
            'password_confirmation' => 'pass',
        ]);

        $response->assertStatus(302);

        $this->assertDatabaseMissing('users', [
            'name' => 'User Test',
            'email' => 'user@example.com',
        ]);

        $this->assertGuest();
    }

    // test register with invalid password confirmation
    public function testRegisterWithInvalidPasswordConfirmation()
    {
        $response = $this->post('/register', [
            'name' => 'User Test',
            'email' => 'user@example.com',
            'password' => 'password',
            'password_confirmation' => 'pass',
        ]);

        $response->assertStatus(302);

        $this->assertDatabaseMissing('users', [
            'name' => 'User Test',
            'email' => 'user@example.com',
        ]);

        $this->assertGuest();
    }

    // test register with same email
    public function testRegisterWithSameEmail()
    {
        $response = $this->post('/register', [
            'name' => 'User Test',
            'email' => 'user@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertStatus(302);

        $this->assertDatabaseHas('users', [
            'name' => 'User Test',
            'email' => 'user@example.com',
        ]);

        $response = $this->post('/register', [
            'name' => 'User Test 2',
            'email' => 'user@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertStatus(302);

        $this->assertDatabaseMissing('users', [
            'name' => 'User Test 2',
            'email' => 'user@example.com',
        ]);

    }

    // test register with empty data
    public function testRegisterWithEmptyData()
    {
        $response = $this->post('/register', [
            'name' => '',
            'email' => '',
            'password' => '',
            'password_confirmation' => '',
        ]);

        $response->assertStatus(302);

        $this->assertDatabaseMissing('users', [
            'name' => '',
            'email' => '',
        ]);

        $this->assertGuest();
    }

}
