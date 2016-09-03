<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Task 5</title>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<div class="menu">
    <?php include 'includes/menu.php';?>
    <?php include 'includes/classes/coffee.class.php';?>
</div>


<div class="container">
  <!--////////////////////////////// Task 5 (a)  //////////////////////////-->
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default">
			    <div class="panel-heading">
			        <h3 class="panel-title">Task 5 (a) -  Coffee Class - MoccaJava</h3>
			    </div>
			    <div class="panel-body">

            <?php
              // Create new instance of Animal and assign a value
              $display = new Coffee('Jamaica', 'MoccaJava', 'dark');

              // Call the Display method and display to screen
              echo $display->displayBrand();
              ?>





			    </div>
			</div>
		</div>
	</div>
  <!--//////////////////////////////Task 5 ( b ) //////////////////////////-->
  <div class="row">
          <div class="col-md-6">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Task 5 (b) -  Coffee Class - Kuma</h3>
                  </div>
                  <div class="panel-body">



                    <?php
                      // Create new instance of Animal and assign a value
                      $display2 = new Coffee('Kenya', 'Kuma', 'medium');

                      // Call the Display method and display to screen
                      echo $display2->displayBrand();
                      ?>



                    </div>
          			</div>
          		</div>
          	</div>


	<iframe src="txt/task5.txt" height="400" scrolling="yes" width="1200px">
		<p>Your browser does not support iframes.</p></iframe>

</div>
</body>
</html>
