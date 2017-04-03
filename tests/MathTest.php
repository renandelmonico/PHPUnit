<?php

use PHPUnit\Framework\TestCase as PHPUnit;

class MathTest extends PHPUnit
{

    protected $Math;

    public function setUp()
    {
        $this->Math = new \App\Tools\Math;
    }

    public function testSum()
    {
        $this->assertEquals(3, $this->Math->sum(1, 2), 'Não somou corretamente');
    }

}