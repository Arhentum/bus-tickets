<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TicketTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_example()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
    public function test_search()
    {   
        // Авторизуем пользователя          
        $response = $this->post('/login', [
            'email' => 'testuser@example.com',
            'password' => 'password',
        ]);
        $from = 'Маршрут1';
        $to = 'Маршрут1';
        $date = '2024-04-20';
        
        $response = $this -> get('/search', [
            'from' => $from,
            'to' => $to,
            'date' => $date,
        ]);

        $response -> assertSuccessful();
    }
}
