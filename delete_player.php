<?php
// Get IDs
    $player = $_GET['player_del'];

// Delete the player from the database
    require_once ('includes/DB/database.php');
    $query = "DELETE FROM Player_Team
              WHERE Player = '$player'";
    $db->exec($query);

// display the Task 9 page
include'task9.php';
?>
