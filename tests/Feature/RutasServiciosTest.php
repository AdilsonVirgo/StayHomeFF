<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RutasServiciosTest extends TestCase {
    //  $faker ='ok';

    /** @test */
    public function testRutaCocodrilerasInicio() {
        $response = $this->get('cocodrileras');
        $response->assertStatus(200);
    }

    /** @test */
    public function testRutaCocodrilerasCreate() {
        $response = $this->get(route('cocodrileras.create'));
        $response->assertStatus(200);
    }

    /** @test */
    public function testRutaCocodrilerasShow() {
        $id = 1;
        $uri = '/cocodrileras/' . $id;
        $response = $this->get($uri);
        $response->assertStatus(200);
    }

    /** @test */
    public function testRutaCocodrilerasEdit() {
        $id = 1;
        $uri = '/cocodrileras/' . $id . '/edit';
        $response = $this->get($uri);
        $response->assertStatus(200);
    }

    //aprender a probar el post
}
