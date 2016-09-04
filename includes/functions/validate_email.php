<?php

function validate_email($email_address) {

  if( !preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email_address))  {
        return false;
      } else {
        return true;
      }
}
?>
