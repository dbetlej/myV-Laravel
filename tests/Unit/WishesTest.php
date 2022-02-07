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
     * A basic unit test creating wishes
     *
     * @return void
     */
    public function test_create_whishes()
    {
        $wish = Wishes::factory()->create();
        $this->assertModelExists($wish);
        $wishes = Wishes::factory()->count(10)->create();
        foreach($wishes as $wish){
            $this->assertModelExists($wish);
        }
    }
    /**
     * A basic unit test ipdating wish
     *
     * @return void
     */
    public function test_update_whish()
    {
        $wish = Wishes::factory()->create();
        $this->assertModelExists($wish);
        $wish->content = 'test';
        $wish->save();
        $this->assertModelExists($wish);
    }
    /**
     * A basic unit test ipdating wish
     *
     * @return void
     */
    public function test_delete_whish()
    {
        $wish = Wishes::factory()->create();
        $this->assertModelExists($wish);
        $wish->delete();
        $this->assertModelMissing($wish);
    }
}
