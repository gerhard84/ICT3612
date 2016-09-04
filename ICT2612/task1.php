<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Task 1</title>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<div class="menu">
    <?php include 'includes/menu.php';?>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default">
			    <div class="panel-heading">
			        <h3 class="panel-title">a) Camel Case</h3>
			    </div>
			    <div class="panel-body">
					<!--//////////////////////////////Task1 (a) //////////////////////////-->
					<?php
					// Declare variables for task 1a
					$varInteger = 25;
					$varDouble = 10.5;
					$varBoolean = TRUE;
					$varString = 'Programming is fun';

					// Echo string with variables
					echo "<strong>Integer:</strong> $varInteger<br>";
					echo "<strong>Double:</strong> $varDouble<br>";
					echo "<strong>Boolean:</strong> $varBoolean<br>";
					echo "<strong>String:</strong> $varString<br>";
					?>
			    </div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default">
			    <div class="panel-heading">
			        <h3 class="panel-title">b) Variable name rules</h3>
			    </div>
			    <div class="panel-body">
					<!--//////////////////////////////Task1 (b) //////////////////////////-->
					<?php
					// Declare variables for task 1b
					$varCaSe = 'Variables is case sensitive';
					$var1234 = 'Variables can contain numbers';
					$var_under = 'Variables can contain underscores';

					// Invalid variable names
					// $__doubleUnderscore;
					// $100;
					// $#567;

					// Echo string with variables
					echo "<strong>Rule 1:</strong> $varCaSe<br/>";
                    echo "<strong>Rule 2:</strong> $var1234<br/>";
					echo "<strong> Rule 3:</strong> $var_under<br/>";
					?>

			    </div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default">
			    <div class="panel-heading">
			        <h3 class="panel-title">c) Concatenation</h3>
			    </div>
			    <div class="panel-body">
					<!--//////////////////////////////Task1 (c) //////////////////////////-->
					<?php
					// Declare variables for task 1c
					$concat1 = 'ICT';
					$concat2 = 2613;

					// Create new variable by concatenating two other variables
					$module = $concat1 . $concat2;

					// Echo concatenated variable
					echo "<strong>Module:</strong> $module<br>";
					?>
			    </div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default">
			    <div class="panel-heading">
			        <h3 class="panel-title">d) Increment the $count variable from 5 to 8</h3>
			    </div>
			    <div class="panel-body">
					<!--//////////////////////////////Task1 (d) //////////////////////////-->
					<?php
					// Declare variable for method 1
					$count = 5;

					// Increase variable by 3
					$count = $count + 3;

					// Echo increased variable
					echo "<strong>Method 1 result :</strong> $count"
					?>
					<br>
					<?php
					// Declare variable for method 2
					$count = 5;

					// Use a while loop with a conditional operator to increase the variable
					// while it is less than or equal than 7 and increase it if it is not.
					while ($count <= 7) $count ++;

					// Echo increased variable
					echo "<strong>Method 2 result :</strong> $count"
					?>
					<br>
					<?php
					// Declare variable for method 3
					$count = 5;

					// Use a do while loop with a conditional operator to increase the variable
					// by 1 if it is less than 8
					do $count ++;
					while ($count <8);

					// Echo increased variable
					echo "<strong>Method 2 result :</strong> $count"
					?>
					<br>
			    </div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default">
			    <div class="panel-heading">
			        <h3 class="panel-title">e) Print date</h3>
			    </div>
			    <div class="panel-body">
					<!--//////////////////////////////Task1 (e) //////////////////////////-->
                    <?php
					// Declare a variable using the date function to format it
					$_date = date("d F Y");

					// Echo the formatted date
                    echo "The date is: <strong>$_date</strong>";
                    ?>
			    </div>
			</div>
		</div>
	</div>

	<iframe src="txt/task1.txt" height="400" scrolling="yes" width="1200px">
		<p>Your browser does not support iframes.</p></iframe>

</div>
</body>
</html>