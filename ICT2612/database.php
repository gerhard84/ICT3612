
<?php
$dsn = 'mysql:host=sql18.jnb1.host-h.net;dbname=guitar_shop2';
$username = 'potchbguqg_2';
$password = 'Azmq9Fi8';

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
}
?>
