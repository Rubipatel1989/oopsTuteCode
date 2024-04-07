<?php

// The ‘final’ keyword, if present in a declaration, denotes that the current method does not support overriding
// by other classes. This is used when there is a requirement to create an immutable class.
// Note: Properties cannot be declared as final. It is only the methods and classes that get to be final


final Class ParentGFG{
    function print(){
     echo "Parent class";
   }
 }
 class ChildGFG extends ParentGFG{
   function print(){
       echo "Child class";
   }
 }
 $object= new ChildGFG();
 $object->print();

 Class ParentGFG{
    final function print(){
     echo "Method in parent class";
   }
 }
 class ChildGFG extends ParentGFG{
   function print(){
       echo "Overrides parent print method";
   }
 }
 $object= new ChildGFG();
 $object->print();
