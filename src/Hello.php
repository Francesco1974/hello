<?php
namespace FSDev;
class Hello {
    private $msg;

    public function __construct($name = "") {
        $this->msg = "Hello " . $name ;
    }

    public function say(){
        echo $this->msg;
    }
}