<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Task 4</title>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<div class="menu">
    <?php include 'includes/menu.php';?>
    <?php include 'includes/classes/animal.class.php';?>
    <?php include 'includes/classes/dog.class.php';?>
</div>


<div class="container">
  <!--////////////////////////////// Task 4 (a)  //////////////////////////-->
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default">
			    <div class="panel-heading">
			        <h3 class="panel-title">Task 4 (a) -  Animal Class</h3>
			    </div>
			    <div class="panel-body">

            <?php
            // Crerate new instance of Animal and assign a value
            $display = new Animal('Jock');
            // Call the Display method and dispaly to screen
            echo $display->greet();
             ?>
			    </div>
			</div>
		</div>
	</div>
  <!--//////////////////////////////Task 4 ( b ) //////////////////////////-->
  <div class="row">
          <div class="col-md-6">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Task 4 (b) -  Animal Class - Subclass Dog</h3>
                  </div>
                  <div class="panel-body">

                    <?php
                    // Crerate new instance of Animal and assign a value
                    $display2 = new Dog('Jock', 'dog');
                    // Call the Display method and dispaly to screen
                    echo $display2->greet();
                     ?>

                    </div>
          			</div>
          		</div>
          	</div>


	<iframe src="txt/task4.txt" height="400" scrolling="yes" width="1200px">
		<p>Your browser does not support iframes.</p></iframe>

</div>
</body>
</html>
