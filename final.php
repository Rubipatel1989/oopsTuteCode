<?php

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
