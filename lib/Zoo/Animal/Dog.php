<?php

namespace Zoo\Animal;

use Zoo\Animal\Ability\Bite;
use Zoo\Animal\Ability\Running;
use Zoo\Animal\Ability\Walking;
use Zoo\CanBeBitten;

class Dog extends Animal implements Walking, Running, Bite
{
    public function voice() :string
    {
        $result = $this->getName() . ' wuf';;

        return $result;
    }

    public function walk(): string
    {
        $result = $this->getName() . ' walking';

        return $result;
    }

    public function run(): string
    {
        $result = $this->getName() . ' run';

        return $result;
    }

    public function bite(CanBeBitten $object): string
    {
        $object->takeDamage();
        $result = $this->getName() . ' has bitten ' . $object->getName();

        return $result;
    }
}
