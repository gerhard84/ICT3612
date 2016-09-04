<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Task 6</title>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<div class="menu">
    <?php include 'includes/menu.php';?>
    <?php include 'includes/classes/registration.class.php';?>
</div>


<div class="container">
  <!--////////////////////////////// Task 6 (a)  //////////////////////////-->
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default">
			    <div class="panel-heading">
			        <h3 class="panel-title">Task 6 (a) -  Registration Class</h3>
			    </div>
			    <div class="panel-body">

            <?php
            // Create variable and assign the constand values from the Registration class
              $minUser =  constant('Registration::MIN_USER');
              $minPass =  constant('Registration::MIN_PASS');
              
           // Display constant values to screen
              echo "The minimum required username length is " . $minUser . ". </br>";
              echo "The minimum required password length is " . $minPass . ". </br>";

             ?>







			    </div>
			</div>
		</div>
	</div>



	<iframe src="txt/task6.txt" height="400" scrolling="yes" width="1200px">
		<p>Your browser does not support iframes.</p></iframe>

</div>
</body>
</html>
