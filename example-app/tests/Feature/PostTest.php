<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/welcome');

        $response->assertStatus(404);
    }
    public function test_post_get_id(){
        $response = $this->get('/post/12');
        $response->assertStatus(200);
    }
    public function test_post_get_unexisted(){
        $response = $this->get('/post/100');
        $response->assertStatus(404);
    }
    public function test_response(){
        $response = $this->get('/post/13');
        $response->assertViewHas('post');
    }
}
