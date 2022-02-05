<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Valentine;

class ValentineTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test creating valentine.
     *
     * @return void
     */
    public function test_create_valentine()
    {
        $v = Valentine::factory()->create();
        $this->assertModelExists($v);
    }

    /**
     * A basic unit test updating valentine.
     *
     * @return void
     */
    public function test_updating_valentine()
    {
        $v = Valentine::factory()->create();
        $v->lover = "192.120.24.120";
        $v->updated_at = date('Y-m-d H:i:s');
        $v->save();
        $this->assertDatabaseHas('mail_logs', [
            'lover' => "192.120.24.120",
        ]);
    }

    /**
     * A basic unit test deleting valentine.
     *
     * @return void
     */
    public function test_deleting_valentine()
    {
        $v = Valentine::factory()->create();
        $v->delete();
        $this->assertDatabaseMissing('mail_logs', [
            'cupid_name' => $v->cupid_name
        ]);
    }
}
