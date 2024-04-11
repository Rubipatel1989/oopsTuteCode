<?php
// $person = 'John ';
// $person[10] = 'Smith';
// echo $person;

$arr= explode('', '12345');

echo "<pre>";
print_r($arr);

class A {
    protected function protectedMethod() {
        echo "This is a protected method";
    }
}

class B extends A {
    public function callProtectedMethod() {
        $this->protectedMethod(); // Can access protected method of class A
    }
}

$b = new A();
$b->protectedMethod(); // Output: This is a protected method

?>

<script>

console.log(3 + 3)
 
 console.log("3" + "3")
  
 console.log("3" + + 3)
  
 console.log(3 + + "3")
  
 console.log(3 + 3 - 3)
  
 console.log("3" + "3" - "3")
</script>