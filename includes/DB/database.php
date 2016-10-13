
<?php
$dsn = 'mysql:host=localhost;dbname=ICT3612';
$username = 'playerAdmin';
$password = 'DBmanager&1';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();    
    exit();
}
?>
