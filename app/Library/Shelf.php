<?php

namespace App\Library;

class Shelf
{
    private $books = [];  // Set empty $books array

    public function addBook(Book $book): Shelf
    {
        $this->books[] = $book; // Add a new book to $books array 
        return $this;
    }


    public function titles(): array
    {
        $names = [];  // Use a different name than "titles"

        foreach ($this->books as $book) {
            $names[] = $book->getTitle();
        }

        return $names;
    }
}
