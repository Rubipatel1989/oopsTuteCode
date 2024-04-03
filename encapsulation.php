<?php

class Class1 {

    private $num;

    public function __construct() {
        $this->num = 2;
    }

    public function getNum() {
        return $this->num;
    }

}

$test1 = new Class1();
echo $test1->getNum();



