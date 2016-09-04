<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Task 10</title>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<div class="menu">
    <?php include 'includes/menu.php';?>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">a) String modification</h3>
                </div>
                <div class="panel-body">
                    <?php
                    $name = 'Gerhard Goossens';
                    $first_name = substr($name, 0, 7);
                    $last_name = substr($name, 8);
                    $mod1 = strrev($name);
                    $mod2 = str_shuffle($name);
                    $mod3 = strtoupper($name);
                    $mod4 = str_pad($name, 30, ' - -', STR_PAD_BOTH);
                    $mod5 = str_replace("Gerhard", "Jennifer", $name);

                    echo "<strong>Name:</strong>
                        $name
                         <br>

                        <strong>First Name:</strong>
                        $first_name
                        <br>

                        <strong>Last Name:</strong>
                        $last_name
                        <br>

                        <strong>String reverse:</strong>
                        $mod1
                        <br>

                        <strong>String shuffle:</strong>
                        $mod2
                        <br>

                        <strong>String to upper case:</strong>
                        $mod3
                        <br>

                        <strong>String padding:</strong>
                        $mod4
                        <br>

                        <strong>String replace:</strong>
                        $mod5
                        <br>";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <iframe src="txt/task10.txt" height="400" scrolling="yes" width="1200px">
        <p>Your browser does not support iframes.</p></iframe>

</div>
</body>
</html>


