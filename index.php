<?php

require __DIR__ . '/vendor/autoload.php';

$router = new \Core\Router();
try {
    $command = $router->resolve($argv[1]);
    $command->execute();
} catch (Throwable $e) {
    echo "Ooops!\n";
    echo $e->getMessage() . "\n";
}
