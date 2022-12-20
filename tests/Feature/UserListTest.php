<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class UserListTest extends TestCase
{
    use WithoutMiddleware;
    use RefreshDatabase;
    // test to show user list
    public function testShowUserList()
    {
        // insert many users with faker

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('password');
        $user->role = 1;
        $user->save();

        $this->actingAs($user);

        $data = [
            ['name' => 'John', 'email' => 'john@example.com', 'password' => 'password'],
            ['name' => 'Jane', 'email' => 'jane@example.com', 'password' => 'password'],
            ['name' => 'Bob', 'email' => 'bob@example.com', 'password' => 'password'],
        ];

        DB::table('users')->insert($data);
        
        $response = $this->get('/admin/user');

        $response->assertStatus(200);

        // $response->assertSee('User List');
    }
}
