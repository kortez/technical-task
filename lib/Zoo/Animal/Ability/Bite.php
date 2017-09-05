<?php

namespace Zoo\Animal\Ability;

use Zoo\CanBeBitten;

interface Bite
{
    public function bite(CanBeBitten $object) :string;
}
