<?php

namespace Tests\Zoo\Animal;

use PHPUnit\Framework\TestCase;
use Zoo\Animal\Dog;

class DogTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();

        $this->animal = new Dog();
    }

    public function testGetName()
    {
        $this->assertEquals('dog', $this->animal->getName());
    }

    public function testVoice()
    {
        $this->assertEquals('dog wuf', $this->animal->voice());
    }
}
