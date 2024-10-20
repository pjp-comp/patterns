<?php 
namespace pattern;

class kindle implements eReaderInterface{

    public function ternOn(){
        var_dump('Kindle is on');
    }

    public function ternNextBtn(){
        var_dump('terning page');

    }
}