<?php 
namespace pattern;

class Nook implements eReaderInterface{
    public function ternOn(){
        var_dump('Nook is on');
    }

    public function ternNextBtn(){
        var_dump('terning page for Nook');

    }
}