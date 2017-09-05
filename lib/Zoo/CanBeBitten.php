<?php

namespace Zoo;

interface CanBeBitten extends Entity
{
    public function takeDamage() :string;
}
