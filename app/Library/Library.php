<?php

namespace App\Library;

class Library
{
    private $shelves;

    public function __construct()
    {
        $this->shelves = collect(); // Set collection in __construct
    }

    public function addShelf(Shelf $shelf): Library
    {
        $this->shelves->push($shelf); // Adds individual shelf to shelves collection
        return $this;
    }

    public function titles()
    {
        return $this->shelves->reduce(function ($books, $shelf) {
            return $books->merge($shelf->titles());
        }, collect())->all();
    }
}
