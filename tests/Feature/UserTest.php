<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
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
    
    
    public function testRowsUserTable(){
            $user = \App\Models\Users::create([ 'First'=>'John', 'Last'=>'Smith', 'Email'=>"test@test.com", 'Password'=>'1234']);
    
            $this->assertDatabaseHas('Users', [ 'First'=>'John', 'Last'=>'Smith', 'Email'=>"test@test.com", 'Password'=>'1234']);
        }
    
}
