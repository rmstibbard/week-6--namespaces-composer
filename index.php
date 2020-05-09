<?php

declare(strict_types=1);

// use Composer autoloading
include_once __DIR__ . '/vendor/autoload.php';

/* Create a class Hello in the App namespace. It should have a method called hello which accepts a string. Don't overthink this one! It's more about the namespaces than the class. */

echo "\nQuestion 1:\n";

use App\Hello;

$sayHi = new Hello();

dump($sayHi->hello("Orb")); // "Hello Orb"
dump($sayHi->hello("Horse")); // "Hello Horse"



// ====================================================================================

/* 
Create a class Person in the App namespace. It should accept a first and last name on creation. It should have a sayHelloTo() method that takes another Person and says hello to them. Make sure your properties are all private: so you'll need to a create fullName() method too.

Use the class as follows in your index.php: */

echo "\nQuestion 2\n";

use App\Person;

$person1 = new Person("Lynne",  "Ramsay");
$person2 = new Person("Wes", "Anderson");

dump($person1->sayHelloTo($person2)); // string(9) "Hello Wes Anderson"
dump($person2->sayHelloTo($person1)); // string(11) "Hello Lynne Ramsay"



// ====================================================================================

/*  Create a class Potato in the App\Stuff\Things namespace. It should have a water() and hasGrown() method. hasGrown() should return false until the Potato has been watered five or more times. */

echo "\nQuestion 3:\n";

use App\Stuff\Things\Potato;

$potato = new Potato();

$potato->water()->water();

dump($potato->hasGrown()); // false

$potato->water()->water();
dump($potato->hasGrown()); // false

$potato->water();
dump($potato->hasGrown()); // true

$potato->water()->water();
dump($potato->hasGrown()); // true



// ====================================================================================/*

/* Create a class Book in the App\Library namespace. It should take a title and its number of pages in the constructor. It should have a read() method, which takes a number of pages that have been read. It should also have a currentPage() page method which tells you which page you're currently on. */

echo "\nQuestion 4:\n";

use App\Library\Book;

$book = new Book("Zero: The Biography of a Dangerous Idea", 256);

// read 12 pages
$book->read(12);
dump($book->currentPage()); // 13 - start on page 1

// read another 25 pages
$book->read(25);
dump($book->currentPage()); // 38



// ====================================================================================

/* Create a Shelf class. It should have an addBook() method which gets passed a Book. It should also have a titles() method, which lists the titles of all the books on the shelf. */

echo "\nQuestion 5:\n";

use App\Library\Shelf;

$shelf = new Shelf();

$shelf->addBook($book);
$shelf->addBook(new Book("The Catcher in the Rye", 277));
$shelf->addBook(new Book("Stamped from the Beginning", 582));

dump($shelf->titles()); // array:3 [ 0 => "Zero: The Biography of a Dangerous Idea" 1 => "The Catcher in the Rye" 2 => "Stamped from the Beginning" ]



// ====================================================================================

/* Create a class Library. It should have an addShelf() method, which takes a Shelf object. It should have a titles() method that lists all the titles of all the books on all the shelves in the library. */

echo "\nQuestion 6:\n";

use App\Library\Library;

$badLibrary = new Library();
$badLibrary->addShelf($shelf);

$otherShelf = new Shelf();
$otherShelf->addBook(new Book("The Power Broker", 1336));
$otherShelf->addBook(new Book("Delusions of Gender", 338));

$badLibrary->addShelf($otherShelf);

dump($badLibrary->titles()); // array:5 [ 0 => "Zero: The Biography of a Dangerous Idea" 1 => "The Catcher in the Rye" 2 => "Stamped from the Beginning" 3 => "The Power Broker" 4 => "Delusions of Gender" ]



// ====================================================================================

/* Create a class Person in the App\People namespace. It should accept a name and birthdate (string). It should have a static method called getAges() which takes an array of Person objects and returns an array of ages. Use the map() method of the Illuminate\Support\Collection class.

Use the class as follows in your index.php: */

echo "\nTricksy Question 1\n";

use App\People\Person as Peep;  // Alias for class

use function PHPSTORM_META\map;

$alfred = new Peep("Alfred", "1967-04-03");
$jasmine = new Peep("Jasmine", "1954-12-28");
$walker = new Peep("Walker", "1994-01-12");

dump(Peep::getAges([$alfred, $jasmine, $walker])); // [52, 65, 15] (or there abouts)
