<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class rulesTest extends TestCase
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
    public function testRowsRulesTable(){
        $user = \App\Models\rules::create(['Program_ID'=>1, 'Friendly_Name'=>'Doubles', 'rule'=>"Class can only be taken 2 times"]);

        $this->assertDatabaseHas('rules', ['Program_ID'=>1, 'Friendly_Name'=>'Doubles', 'rule'=>"Class can only be taken 2 times"]);
    }
}
