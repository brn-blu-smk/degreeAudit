<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class classesTest extends TestCase
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
    public function testRowsClassesTable(){
        $user = \App\Models\classes::create(['User_ID'=>1, 'Program_ID'=>'1', 'Title'=>"test class", 'Term'=>'Fall 2020', 'Grade'=>'A', 'Credits'=>3]);

        $this->assertDatabaseHas('classes', ['User_ID'=>1, 'Program_ID'=>'1', 'Title'=>"test class", 'Term'=>'Fall 2020', 'Grade'=>'A', 'Credits'=>3]);
    }
}
