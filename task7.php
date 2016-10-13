<?php $pageTitle = "Task 7";?>
<?php include './includes/header.php';?>
<?php include 'includes/functions/validate_email.php';?>
<?php include 'includes/functions/validate_first_five.php';?>
<body>
  <div class="container">
    <!--////////////////////////////// Task 7 (a)  //////////////////////////-->
    <div class="row">
      <div class="col-md-5 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Task 7 (a) -  Validate email - Check</h3>
          </div>
          <div class="panel-body">
            <?php
            //Assignment for valid email
            $email_address = 'student@unisa.ac.za';
            if (validate_email($email_address) == true) {
              echo $email_address . ' is valid</br>';
            } elseif (validate_email($email_address) == false) {
              echo $email_address . ' is invalid</br>';
            }
            ?>
            <?php
            //Assignment for invalid email
            $email_address = '_student@unisa.ac.za';

            if (validate_email($email_address) == true) {
              echo $email_address . ' is valid</br>';
            } elseif (validate_email($email_address) == false) {
              echo $email_address . ' is invalid</br>';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <!--//////////////////////////////Task 7 ( b ) //////////////////////////-->
    <div class="row">
      <div class="col-md-5 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Task 7 (b) -  Validate email - Alpha Numeric</h3>
          </div>
          <div class="panel-body">
            <?php
            // Create variables to test
            $range1 = 'A1357';
            $range2 = '#5678';
            $range3 = '123456';
            // Use the Function and pass in the variables
            validate_first_five($range1);
            validate_first_five($range2);
            validate_first_five($range3);
            ?>
          </div>
        </div>
      </div>
    </div>
    <iframe src="txt/task7.txt" height="400" scrolling="yes" width="1200px">
      <p>Your browser does not support iframes.</p></iframe>      
    </div>
  </body>
  </html>
