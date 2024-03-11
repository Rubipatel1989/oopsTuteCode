<?php 

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