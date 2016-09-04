<?php
//Function to validate first 5 charaters of an variable
  function validate_first_five($value) {

// Checks if first five characters is alpha-numeric
    if( preg_match('(^[a-zA-Z0-9]{5})', $value) )
    {
  //If it matches, echo the value and a valid message
      echo($value . ' is a valid range.</br>');
    } else {
  //If it does not match, echo the value and a invalid message
      echo($value . ' is not a valid range.</br>');
      }
    }
?>
