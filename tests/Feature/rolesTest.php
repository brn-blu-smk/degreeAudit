<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class rolesTest extends TestCase
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
    public function testRowsRolesTable(){
        $user = \App\Models\roles::create(['User_ID'=>'1', 'Role'=>'Admin']);

        $this->assertDatabaseHas('roles', ['User_ID'=>'1', 'Role'=>'Admin']);
    }
}
