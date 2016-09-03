
<?php

class Animal {

  protected $name;

  public function __construct($name) {
       $this->name = $name;
   }

  public function getName() {
          return $this->name;
      }

  public function setName($value) {
          $this->name = $value;
  }

  public function greet()  {
    $output = "Hello, I'm some sort of animal and my name is " . $this->name;
    return $output;
  }

}
?>
