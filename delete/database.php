
<?php
$dsn = 'mysql:host=localhost;dbname=ICT3612';
$username = 'playerAdmin';
$password = 'DBmanager&1';

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
	catch(PDOException $e){
		echo $e->getMessage();
	}
