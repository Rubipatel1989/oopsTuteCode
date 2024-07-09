<?php
class A
{
  public $property1;
  public $property2;

  public function __construct($property1, $property2)
  {
    $this->property1 = $property1;
    $this->property2 = $property2;
  }
  public function getProperties()
  {
    return [
      'property1' => $this->property1,
      'property2' => $this->property2,
    ];
  }
}
class C
{
  private $classInstance;
  public function __construct(A $classInstance)
  {
    $this->classInstance = $classInstance;
  }
}
