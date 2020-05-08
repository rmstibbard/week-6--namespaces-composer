<?php

namespace App\Stuff\Things;

class Potato
{
    private $watered = 0;  // No need for construct when value is set here

    public function water(): Potato
    {
        $this->watered += 1;
        return $this;
    }

    public function hasGrown(): bool
    {
        return $this->watered >= 5; // No need to use if/else statement
    }
}
