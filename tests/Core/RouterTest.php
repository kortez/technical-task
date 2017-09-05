<?php

namespace Tests\Core;

use PHPUnit\Framework\TestCase;
use Core\Router;

class RouterTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();

        $this->router = new Router();
    }

    public function testResolveError()
    {
        $this->expectException('\Core\Exception\RouterException');
        $this->router->resolve('NonexistentCommand');
    }
}
