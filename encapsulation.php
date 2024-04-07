<?php

// Encapsulation is a protection mechanism (Access modifier) for the data members and methods present 
// inside the class. In the encapsulation technique, we are restricting the data members, 
// methods from access to outside end-user.

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



