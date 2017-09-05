<?php

namespace Zoo\Animal;

use Zoo\Animal\Ability\Walking;

class Cat extends Animal implements Walking
{
    public function voice() :string
    {
        $result = $this->getName() . ' meow';

        return $result;
    }

    public function walk(): string
    {
        $result = $this->getName() . ' walking';

        return $result;
    }
}
