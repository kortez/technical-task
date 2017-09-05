<?php

namespace Core;

use Core\Exception\RouterException;

class Router
{
    const COMMAND_PATH = 'App\Command\\';

    public function resolve(string $command_name) :Command
    {
        $class_name = self::COMMAND_PATH . $command_name;
        if (!class_exists($class_name)) {
            throw new RouterException("Command '{$command_name}' does not exist.");
        }

        $object = new $class_name();

        return $object;
    }
}
