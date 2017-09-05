<?php

namespace Tests\Zoo;

use PHPUnit\Framework\TestCase;
use Zoo\Human;

class HumanTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();

        $this->human_name = 'Ivan';
        $this->human = new Human($this->human_name);
    }

    public function testGetName()
    {
        $this->assertEquals($this->human_name, $this->human->getName());
    }

    public function testTakeDamage()
    {
        $this->assertEquals('This is unfortunate', $this->human->takeDamage());
    }
}
