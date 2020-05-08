<?php

namespace App;

class Hello
{
    private $name;

    public function hello(string $name): string
    {
        return "Hello $name";
    }
}
