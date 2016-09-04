<?php
  class Coffee
  {
// Create variables
    private $country_origin, $name, $degrees_roasted;

//Create default constructor
    function __construct($country_origin, $name, $degrees_roasted)
    {
      $this->country_origin = $country_origin;
      $this->name = $name;
      $this->degrees_roasted = $degrees_roasted;
    }

// Create getters and setters for variables
    public function getCountry_origin() {
            return $this->country_origin;
        }

    public function setCountry_origin($value) {
            $this->country_origin = $value;
    }

    public function getName() {
            return $this->name;
        }

    public function setName($value) {
            $this->name = $value;
    }

    public function getDegrees_roasted() {
            return $this->degrees_roasted;
        }

    public function setDegrees_roasted($value) {
            $this->degrees_roasted = $value;
    }
    
// Create display function
    public function displayBrand() {
      return $this->name . ' is from ' . $this->country_origin . ' and is ' . $this->degrees_roasted . ' roasted.';
    }

  }
 ?>
