<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_post_endpoint(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/api/post');

        $response->assertOk();
    }
}
