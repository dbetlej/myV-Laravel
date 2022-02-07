<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Wishes;

class WishesTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test creating whish
     *
     * @return void
     */
    public function test_create_whish()
    {
        $whish = Wishes::factory()->create();
        $this->assertModelExists($whish);
    }
    /**
     * A basic unit test creating whishes
     *
     * @return void
     */
    public function test_create_whishes()
    {
        $whishes = Wishes::factory()->count(10)->create();
        foreach($whishes as $whish){
            $this->assertModelExists($whish);
        }
    }
}
