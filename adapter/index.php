<?php

require 'vendor/autoload.php';

use pattern\Book;
use pattern\BookInterface;
use pattern\kindle;
use pattern\eReaderAdapter;
use pattern\Nook;

class Person{

    public function readBook(BookInterface $book){
        $book->open();
        $book->ternPage();
    }
}

(new Person())->readBook(new eReaderAdapter((new Nook)));
// (new Person())->readBook(new Book);