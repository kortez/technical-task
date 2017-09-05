<?php

namespace Zoo\Animal;

use Zoo\Animal\Ability\Walking;

class Rat extends Animal implements Walking
{
    public function voice() :string
    {
        $result = $this->getName() . ' pi';

        return $result;
    }

    public function walk(): string
    {
        $result = $this->getName() . ' walking';

        return $result;
    }
}
