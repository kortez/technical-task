<?php

namespace Zoo\Animal;

use Zoo\Entity;
use Zoo\Food\Food;

abstract class Animal implements Entity
{
    abstract function voice() :string;

    public function getName() :string
    {
        $class_name = get_class($this);
        $name_parts = explode('\\', $class_name);
        $name = strtolower(array_pop($name_parts));

        return $name;
    }

    public function eat(Food $food) :string
    {
        return $this->getName() . ' said: I like it';
    }
}
