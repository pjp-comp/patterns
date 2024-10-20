<?php

namespace pattern;

class Book implements BookInterface{

    public function open(){
        var_dump('Open a book');
    }

    public function ternPage(){
        var_dump('Next page');
    }
}