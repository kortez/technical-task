<?php

namespace Tests\Zoo\Animal;

use PHPUnit\Framework\TestCase;
use Zoo\Animal\Sparrow;

class SparrowTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();

        $this->animal = new Sparrow();
    }

    public function testGetName()
    {
        $this->assertEquals('sparrow', $this->animal->getName());
    }

    public function testVoice()
    {
        $this->assertEquals('sparrow tweet', $this->animal->voice());
    }

    public function testFly()
    {
        $this->assertEquals('sparrow fly', $this->animal->fly());
    }
}
