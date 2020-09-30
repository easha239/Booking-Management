<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SessionDataTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSession()
    {
        $response = $this->withSession(['foo' => 'bar'])
            ->get('/catalog-view');
        $response->assertStatus(500);
    }
}
