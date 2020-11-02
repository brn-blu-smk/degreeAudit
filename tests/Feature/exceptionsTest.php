<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class exceptionsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testRowsExceptionsTable(){
        $user = \App\Models\exceptions::create(['User_ID'=>1, 'Rule_ID'=>'1']);

        $this->assertDatabaseHas('exceptions', ['User_ID'=>1, 'Rule_ID'=>'1']);
    }
}
