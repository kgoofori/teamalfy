<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserAuthTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_register()
    {
        $response = $this->post(route('auth.register'), [
            'name' => 'Gideon',
            'email' => 'email@gmail.com',
            'username' => 'gideon',
            'password' => 'P@ssw0rd',
            'country' => 'Ghana',
            'dob' => '2022-01-02',
            'phone' => '+233242234565'
        ]);

        $response->assertSessionHasNoErrors();
        $response->assertLocation(route('dashboard'));

        $this->assertDatabaseHas('users', ['email' => 'email@gmail.com']);
        
    }

    public function test_require_strong_password()
    {
        $response = $this->post(route('auth.register'), [
            'name' => 'Gideon',
            'email' => 'email@gmail.com',
            'username' => 'gideon',
            'password' => 'password',
            'country' => 'Ghana',
            'dob' => '2022-01-02',
            'phone' => '+233242234565'
        ]);

        $response->assertSessionHasErrors(['password']);
    }

    public function test_user_can_login()
    {
        $user = User::factory()->create(); //password is password by default

        $response = $this->postJson(route('auth.login'),['username' => $user->username, 'password' => 'password']);

        $response->assertSessionHasNoErrors();
        $response->assertLocation(route('dashboard'));
    }


}
