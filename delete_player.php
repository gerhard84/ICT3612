<?php
// Get IDs
    $player = htmlspecialchars($_GET['player_del']);

// Delete the player from the database
    require_once ('includes/DB/database.php');
    $query = "DELETE FROM Player_Team
              WHERE Player = :player";

        $statement = $db->prepare($query);
        $statement->bindValue(':player', $player);
        $statement->execute();
        $statement->closeCursor();
// display the Task 9 page
echo "<meta http-equiv=\"refresh\" content=\"0;URL=task9.php\">";
?>
