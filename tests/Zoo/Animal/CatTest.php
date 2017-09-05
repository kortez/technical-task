<?php

namespace Tests\Zoo\Animal;

use PHPUnit\Framework\TestCase;
use Zoo\Animal\Cat;

class CatTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();

        $this->animal = new Cat();
    }

    public function testGetName()
    {
        $this->assertEquals('cat', $this->animal->getName());
    }

    public function testVoice()
    {
        $this->assertEquals('cat meow', $this->animal->voice());
    }

    public function testWalk()
    {
        $this->assertEquals('cat walking', $this->animal->walk());
    }
}
