<?php

namespace Tests\Feature\Authenticate;

use App\Models\Account;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_authenticated_user()
    {
        $response = $this->post('/api/authentication/login',[
            "username" => "admin",
            "password" => "admin",
        ]);
        
        $response->assertStatus(200);
        $this->assertAuthenticated($guard = null);
        // $response->dd();
    }

    public function test_unauthenticated_user()
    {
        $response = $this->post('/api/authentication/login',[
            "username" => "asd",
            "password" => "sit",
        ]);

        $response->assertStatus(401);
        $this->assertGuest();
    }

    public function test_less_field(){
        $response = $this->post('/api/authentication/login',[
            "username" => "admin"
        ]);
        
        $response->assertStatus(400);
    }

    public function test_authenticated_as_admin()
    {
        $user = Account::where('username','admin')->first();

        $response = $this->post('/api/authentication/login',[
            "username" => "admin",
            "password" => "admin",
        ]);
        
        $response->assertStatus(200);
        $this->assertAuthenticatedAs($user);
    }
}
