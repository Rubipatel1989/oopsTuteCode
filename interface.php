<?php
// When multiple classes inherit in a single class then this is called interface. Suppose we have 
// 2 interface first is parent1 with method addition and second is parent2 with method subtraction. 
// When both interface implement in child class then both method of interface must be applied in child class. 

interface parrent1 {

    function add($a, $b);
}
interface parrent2 {

    function sub($c, $d);
}
class childClass implements parrent1, parrent2 {
    public function add($a, $b) {
        echo $a + $b;
    }

    public function sub($a, $b) {
        echo $a - $b;
    }
}

$test1 = new childClass();
$test1->add(10, 11);
echo "<br>";
$test1->sub(10, 11);
