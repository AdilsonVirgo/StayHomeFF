<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class RutasBasicoTest extends TestCase {
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function testRutaRaiz() {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /** @test */
    public function testRutaHomeSinAutenticacion() {
        $response = $this->get('home');
        $response->assertStatus(302);
        $response->assertRedirect('login');
    }

    /** @test */
    public function testRutaHomeConAutenticacion() {
        $user = \App\User::where('name', 'SuperAdmin')->first();   
        $response = $this->actingAs($user)->get('home');
        $response->assertStatus(200);
    }

    /** @test */
    public function testRutaLogin() {
        $response = $this->get('login');
        $response->assertStatus(200);
    }

}
