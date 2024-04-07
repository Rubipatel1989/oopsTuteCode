<?php
// When same name class that’s in different files used in single file using name space. 
// Suppose in first file class namespace is first and class name is hello and in second file namespace 
// is second and class name is hello. When this two files require in third file then object will be written 
// as $obj = new first\hello();

require './product.php';
require './testing.php';
 function wow() {
        echo "Wow from Testing files<br>";
    }
$obj1 = new testing\Product();
$obj2 = new product\Product();
wow();
$obj2->wow();