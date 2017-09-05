<?php

namespace Tests\Zoo\Animal;

use PHPUnit\Framework\TestCase;
use Zoo\Animal\Rat;

class RatTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();

        $this->animal = new Rat();
    }

    public function testGetName()
    {
        $this->assertEquals('rat', $this->animal->getName());
    }

    public function testVoice()
    {
        $this->assertEquals('rat pi', $this->animal->voice());
    }

    public function testWalk()
    {
        $this->assertEquals('rat walking', $this->animal->walk());
    }
}
