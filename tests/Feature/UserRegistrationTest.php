<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserRegistrationTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRegistration()
    {
        $this->withExceptionHandling();
        Event::fake();


        $response = $this->post('registeruser', [
            '_token' => csrf_token(),
            'email' => 'easha@gmail.com',
            'password' => '123',
        ]);

        $count = DB::table('users')->count();
        $this->assertEquals(1, $count);
    }
}
