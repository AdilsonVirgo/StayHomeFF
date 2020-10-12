<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class CocodrileraTest extends TestCase {

    /**  @test */
    public function testHasAName() {
        $attributes = [
            'name' => 'coco1',
            'ueb_id' => 1,
            'capacidad' => 10,
            'paxs' => 0,
            'disponibilidad' => 10,
            'albergue' => 0,
            'observaciones' => null,
        ];
        $coco = new \App\Cocodrilera($attributes);
        $this->assertEquals('coco1', $coco->name);
    }

}
