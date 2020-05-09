<?php

namespace App\People;

use Carbon\Carbon;

class Person
{
    public static function getAges($people)
    {
        return collect($people)->map(function ($person) {
            return $person->age();
        })->all();
    }

    private $name;
    private $birthday;

    public function __construct($name, $birthday)
    {
        $this->name = $name;
        $this->birthday = new Carbon($birthday); // Carbon provides for easy manipulation of dates/times
    }

    public function age()
    {
        return $this->birthday->age; // Carbon method - gets age now based on date of value in property
    }
}
