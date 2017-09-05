<?php

namespace Zoo\Animal;

use Zoo\Animal\Ability\Flying;

class Sparrow extends Animal implements Flying
{
    public function voice() :string
    {
        $result = $this->getName() . ' tweet';

        return $result;
    }

    public function fly(): string
    {
        $result = $this->getName() . ' fly';

        return $result;
    }
}
