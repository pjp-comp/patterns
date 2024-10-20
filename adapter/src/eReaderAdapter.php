<?php 
namespace pattern;

class eReaderAdapter implements BookInterface{

    private $eReaderAdapter;
    public function __construct(eReaderInterface $eReaderAdapter)
    {
        $this->eReaderAdapter = $eReaderAdapter;
    }

    public function open(){
        return $this->eReaderAdapter->ternOn();
    }

    public function ternPage()
    {
        return $this->eReaderAdapter->ternNextBtn();
    }

}