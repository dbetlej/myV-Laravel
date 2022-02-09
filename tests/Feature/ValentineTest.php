<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Valentine;

class ValentineTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test user making valentine.
     *
     * @return void
     */
    public function test_user_making_valentine()
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->post('/valentine', [
            'cupid_name' => '',
            'content'    => ''
        ]);
        $response->assertSessionHas('error');

        $response = $this->post('/valentine', [
            'cupid_name' => 'test',
            'content'    => ''
        ]);
        $response->assertSessionHas('error');

        $response = $this->post('/valentine', [
            'cupid_name' => "ValentineTest",
            'content' => "ValentineContentTest"
        ]);
        $v = Valentine::CupidName('ValentineTest')->first();
        $response->assertSee($v->valentine_token);

        $mailable = new \App\Mail\Valentine($v->valentine_token);
        
        $mailable->assertSeeInHtml($v->valentine_token);
    }

    /**
     * A basic feature test user receiving valentine.
     *
     * @return void
     */
    public function test_user_getting_valentine()
    {
        $response = $this->get('/valentine/');
        $response->assertRedirect('/404');
        
        $response = $this->get('/valentine/test');
        $response->assertRedirect('/404');

        $v = Valentine::factory()->create();
        $response = $this->get('/valentine/'.$v->valentine_token);
        $response->assertSeeText($v->cupid_name);
    }
}
