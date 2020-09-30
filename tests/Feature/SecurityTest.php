<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Event;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SecurityTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_auth_routes(){
        Event::fake();
        $this->withExceptionHandling();
        $this->get('dashboard/add-new-car')->assertStatus(302);
    }
}
