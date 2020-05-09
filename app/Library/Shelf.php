<?php

namespace App\Library;

class Shelf
{

    public function __construct() // Using collections
    {
        $this->books = collect(); // Set collection in __construct
    }

    public function addBook($book)
    {
        $this->books->push($book);
        return $this;
    }

    public function titles()
    {
        return $this->books->map(function ($book) {  //Equivalent of array loop
            return $book->title();
        })->all();
    }
}
