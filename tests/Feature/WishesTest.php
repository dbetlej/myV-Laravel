<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Wishes;

class WishesTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test to get wish
     *
     * @return void
     */
    public function test_get_wish_from_db()
    {
        $wish = Wishes::factory()->create();
        $response = $this->get('/get_whishes');
        $response->assertJson([
            'content' => $wish->content
        ]);
    }
}
