<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class permissionsTest extends TestCase
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
    public function testRowsPermissonsTable(){
        $user = \App\Models\permissions::create(['Permissions'=>'Student','User_ID'=>001]);


        $this->assertDatabaseHas('permissions', ['Permissions'=>'Student','User_ID'=>001]);
    }
}
