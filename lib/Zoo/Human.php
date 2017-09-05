<?php

namespace Zoo;

class Human implements Entity, CanBeBitten
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName() :string
    {
        return $this->name;
    }

    public function takeDamage() :string
    {
        return 'This is unfortunate';
    }
}
