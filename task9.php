<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Task 9</title>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<div class="menu">
      <?php include 'includes/menu.php';?>

<?php require 'includes/DB/database.php'; ?>

</div>






<div class="container">
  <!--////////////////////////////// Task 9 (a)  //////////////////////////-->
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
			    <div class="panel-heading">
			        <h3 class="panel-title">Task 9 (a) -  Soccer DB - List all players and Country of Birth</h3>
			    </div>
			    <div class="panel-body">

            <?php
            //The SQL SELECT statement//
            $query= 'SELECT * FROM Player_Team';
            $statement = $db->prepare($query);
            $statement->execute();
            $players = $statement->fetchAll(PDO::FETCH_ASSOC);

            // Create Table
            echo "<table class='table table-bordered table-hover'>
                  <tr>
                  <th>Name</th>
                  <th>Country</th>
                  </tr>";

            foreach ($players as $player) {
              echo "<form action=task9.php method=post>";
              echo "<tr>";
              echo "<td>" . $player[Player] . "</td>";
              echo "<td>" . $player[BirthCountry] . "</td>";
              echo "</tr>";
              echo "</form>";
            }
            echo "</table>";

             ?>
			    </div>
			</div>
		</div>
	</div>
  <!--//////////////////////////////Task 8 ( b ) //////////////////////////-->
  <div class="row">
          <div class="col-md-8">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Task 9 (b) -  Soccer DB - List Players that was born in Argentina</h3>
                  </div>
                  <div class="panel-body">

                    <?php
                    //The SQL SELECT statement//
                    $query= "SELECT * FROM Player_Team where BirthCountry = 'Argentina'";
                    $statement = $db->prepare($query);
                    $statement->execute();
                    $players = $statement->fetchAll(PDO::FETCH_ASSOC);

                    // Create Table
                    echo "<table class='table table-bordered table-hover'>
                          <tr>
                          <th>Name</th>
                          <th>Country</th>
                          </tr>";

                    foreach ($players as $player) {
                      echo "<form action=task9.php method=post>";
                      echo "<tr>";
                      echo "<td>" . $player[Player] . "</td>";
                      echo "<td>" . $player[BirthCountry] . "</td>";
                      echo "</tr>";
                      echo "</form>";
                    }
                    echo "</table>";
                    $db = null;
                     ?>





                    </div>
          			</div>
          		</div>
          	</div>

            <!--//////////////////////////////Task 8 ( c ) //////////////////////////-->
            <div class="row">
                    <div class="col-md-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Task 9 (c) -  Soccer DB - Add new Player</h3>
                            </div>
                            <div class="panel-body">







                              </div>
                          </div>
                        </div>
                      </div>

                      <!--//////////////////////////////Task 8 ( d ) //////////////////////////-->
                      <div class="row">
                              <div class="col-md-8">
                                  <div class="panel panel-default">
                                      <div class="panel-heading">
                                          <h3 class="panel-title">Task 9 (d) -  Soccer DB - List Players - Edit Players</h3>
                                      </div>
                                      <div class="panel-body">







                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <!--//////////////////////////////Task 8 ( e ) //////////////////////////-->
                                <div class="row">
                                        <div class="col-md-8">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Task 9 (e) -  Soccer DB - Delete Players</h3>
                                                </div>
                                                <div class="panel-body">







                                                  </div>
                                              </div>
                                            </div>
                                          </div>

	<iframe src="txt/task9.txt" height="400" scrolling="yes" width="1200px">
		<p>Your browser does not support iframes.</p></iframe>

</div>
</body>
</html>
