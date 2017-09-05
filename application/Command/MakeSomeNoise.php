<?php

namespace App\Command;

use Core\Command;
use Zoo\Animal\Cat;
use Zoo\Animal\Dog;
use Zoo\Animal\Rat;
use Zoo\Animal\Sparrow;
use Zoo\Food\Sugar;
use Zoo\Human;

class MakeSomeNoise extends Command
{
    public function execute() :void
    {
        $animals = [
            new Cat(),
            new Dog(),
            new Rat(),
            new Sparrow(),
        ];
        $animal_need_do = [
            'cat' => [
                'walk' => null,
            ],
            'dog' => [
                'walk' => null,
                'run' => null,
                'bite' => new Human('Dima'),
            ],
            'rat' => [],
            'sparrow' => [
                'walk' => null,
                'fly' => null,
            ],
        ];

        foreach ($animals as $animal) {
            echo $animal->voice() . "\n";

            if (!empty($animal_need_do[$animal->getName()])) {
                foreach ($animal_need_do[$animal->getName()] as $skill => $arg) {
                    if (!method_exists($animal, $skill)) continue;

                    echo $animal->{$skill}($arg) . "\n";
                }
            }

            $food = new Sugar();
            echo $animal->eat($food) . "\n\n";
        }
    }
}
