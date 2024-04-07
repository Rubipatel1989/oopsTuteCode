<?php 
// When a common method used in different-different class then this is called trait. Suppose we have a trait 
// name Hello with method SayHello then it can be use different-different class. (Syntax use)

trait hello{
    public function sayHello($name){
        echo $name . " I am best" . "<br>";
    }
}
class base1{
    use hello;
}
class base2{
    use hello;
}

$obj1 = new base1;
$obj1->sayHello('Sonu');

$obj2 = new base2;
$obj2->sayHello('Monu');