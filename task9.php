<!-- Insert Player PHP-->
<?php
// Get the player to insert
    $player = $_POST['player'];
    $country = $_POST['country'];
    $team = $_POST['team'];
// Insert player
    if(isset($_POST['submit'])){
      require_once 'includes/DB/database.php';
        $query = "INSERT INTO Player_Team
                     (Player, BirthCountry, Team)
                  VALUES
                     ('$player', '$country', '$team')";
        $db->exec($query);
    }
?>

<!-- Delete Player PHP-->
<?php
require_once 'includes/DB/database.php';
// Get Player to delete
   if(!isset($player)) {
       $player = $_GET['player'];
       $country = $_GET['country'];
       $team = $_GET['team'];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Task 9</title>
</head>
<body>

<div class="menu">
      <?php include 'includes/menu.php';?>
</div>
<div class="container">

  <!--////////////////////////////// Task 9 (a)  //////////////////////////-->
  <!-- Create Table -->
  <div class="row">
  		<div class="col-md-8">
  			<div class="panel panel-default">
  		    <div class="panel-heading">
  		      <h3 class="panel-title">Task 9 (a) -  Soccer DB - List all players and Country of Birth</h3>
  		    </div>
  		    <div class="panel-body">
            <table class='table table-bordered table-hover'>
              <tr>
                <th>Name</th>
                <th>Country</th>
              </tr>
                <?php
                // Get all Players
                $query= 'SELECT * FROM Player_Team';
                $statement = $db->prepare($query);
                $statement->execute();
                $players = $statement->fetchAll(PDO::FETCH_ASSOC);
                ?>

                <?php
                foreach ($players as $player) {
                  ?>
                  <form action=task9.php method=post>
                    <tr>
                      <td><?php echo $player[Player]; ?></td>
                      <td><?php echo $player[BirthCountry]; ?></td>
                    </tr>
                  </form>
                <?php
                }
                ?>
                </table>
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
                      ?>
                      <!-- Create Table -->
                      <table class='table table-bordered table-hover'>
                        <tr>
                          <th>Name</th>
                          <th>Country</th>
                        </tr>
                      <?php
                      foreach ($players as $player) {
                        ?>
                        <form action=task9.php method=post>
                          <tr>
                            <td><?php echo $player[Player]; ?></td>
                            <td><?php echo $player[BirthCountry]; ?></td>
                          </tr>
                        </form>
                        <?php
                      }
                      ?>
                      </table>
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

                      <form method="post" action="">
                      <div class="form-horizontal">
                          <div class="span3">
                              <div class="control-group">
                                  <label class="control-label">Player Name</label>
                                  <div class="controls">
                                      <input type="text" name="player" class="input-medium" >
                                  </div>
                                  <div class="control-group">
                                      <label class="control-label">Country</label>
                                      <div class="controls">
                                          <input type="text" name="country" class="input-medium">
                                      </div>
                                  </div>
                                  <div class="control-group">
                                      <label class="control-label">Team</label>
                                      <div class="controls">
                                          <input type="text" name="team" class="input-medium">
                                      </div>
                                  </div><br>
                                  <input type="submit" value="Submit" name="submit"><br/>
                              </div>
                          </div>
                      </form>
                      </div>
                  </div>
                </div>
              </div>
            <!--////////////////////////////// Task 9 (d and e) //////////////////////////-->
              <div class="row">
                <div class="col-md-8">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Task 9 (d and e) -  Soccer DB - List Players - Edit Players - Delete Players</h3>
                    </div>
                      	<div class="panel-body">
                          <!-- Create Table -->
                          <table class='table table-bordered table-hover'>
                            <tr>
                              <th>Name</th>
                                <th>Country</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                            // Get all Players
                              $statement = $db->prepare('SELECT Player, BirthCountry, Team FROM Player_Team');                              
                              $statement->execute();
                              $players = $statement->fetchAll(PDO::FETCH_ASSOC);
                            ?>

                            <?php
                              foreach ($players as $player) {
                            ?>
                              <form action="" method="post">
                                <tr>
                                  <td><?php echo htmlentities($player['Player']); ?></td>
                                  <td><?php echo htmlentities($player['BirthCountry']); ?></td>
                                  <td><a  href="edit_player.php?player_edit=<?php echo ($player['Player']);?>" title="Edit" ><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
                                  <td><a  href="delete_player.php?player_del=<?php echo ($player['Player']);?>" title="Delete" onclick="return confirm('Confirm Player Delete ?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</td>
                                </tr>
                              </form>
                              <?php
                              }
                              // CLOSE DB
                              $db = null;
                              ?>
                          </table>
                      	</div>
                      </div>
                    </div>
                  </div>
	                  <iframe src="txt/task9.txt" height="400" scrolling="yes" width="1200px">
		    <p>Your browser does not support iframes.</p></iframe>
    </div>
  </body>
</html>
