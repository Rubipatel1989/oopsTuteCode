<?php 

class First_Class{
    public $var1 = "First Class Value";
    public function getValue(){
        return $this->var1;
    }
}
class Second_Class{
    public $var2 = "";
    function __construct(First_Class $class1){
        $this->var2 = $class1->var1;
    }
}
$class2 = new Second_Class(new First_Class());
echo $class2->var2;





