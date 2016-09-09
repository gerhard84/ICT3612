<<?php

      require_once 'includes/DB/database.php';

if(isset($_GET['player_edit']) && !empty($_GET['player_edit']))
      {
        $player_edit = $_GET['player_edit'];
		    $stmt_edit = $db->prepare('SELECT Player, BirthCountry, Team
                                    FROM Player_Team
                                    WHERE Player = :pid');
		    $stmt_edit->execute(array(':pid'=>$player_edit));
		    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		    extract($edit_row);
      }

         if(isset($_POST['update']))
         {
           $playername = $_POST['player_name'];
           $playercountry = $_POST['player_country'];
           $playerteam = $_POST['player_team'];


           $statement = $db->prepare('UPDATE Player_Team
                                      SET Player = :pname,
                                          BirthCountry = :pcountry,
                                          Team = :pteam
                                    WHERE Player = :pid');
          $statement->bindParam(':pname',$playername);
          $statement->bindParam(':pcountry',$playercountry);
          $statement->bindParam(':pteam',$playerteam);
          $statement->bindParam(':pid',$player_edit);

           $statement->execute();
           include'task9.php';
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
  <div class="row">
          <div class="col-md-8">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Task 9 (d) -  Soccer DB - Edit Player</h3>
                  </div>
                  <div class="panel-body">

                    <form method="post" action="">
                    <div class="form-horizontal">
                        <div class="span3">
                            <div class="control-group">
                                <label class="control-label">Player Name</label>
                                <div class="controls">
                                    <input type="text" name="player_name" class="input-medium" value="<?php echo $Player;?>" required >
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Country</label>
                                    <div class="controls">
                                        <input type="text" name="player_country" class="input-medium" value="<?php echo $BirthCountry;?>" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Team</label>
                                    <div class="controls">
                                        <input type="text" name="player_team" class="input-medium" value="<?php echo $Team;?>" required>
                                    </div>
                                </div><br>
                                <input type="submit" value="Submit" name="update"><br/>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
              </div>
            </div>
            <iframe src="txt/task9.txt" height="400" scrolling="yes" width="1200px">
<p>Your browser does not support iframes.</p></iframe>
</div>
</body>
</html>
