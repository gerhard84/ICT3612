<?php
class Dog extends Animal{

  private $type;

  public function __construct($name, $type) {
    $this->type = $type;

    // Call Animal constructor to finish initialization
    parent::__construct($name);
  }

  public function getType() {
          return $this->type;
      }

  public function setType($value) {
          $this->type = $value;
  }

  public function Greet()  {
    $output2 = "Hello, I'm a " . $this->type . ' and my name is ' . $this->name;
    return $output2;
  }
}
 ?>
