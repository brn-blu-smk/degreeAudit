<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class programsTest extends TestCase
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
    public function testRowsProgramsTable(){
        $user = \App\Models\programs::create(['Year'=>'2020', 'Class_Code'=>'CSC351', 'Freindly_Name'=>'test class', 'Major'=>'CSC']);

        $this->assertDatabaseHas('programs', ['Year'=>'2020', 'Class_Code'=>'CSC351', 'Freindly_Name'=>'test class', 'Major'=>'CSC']);
    }
}
