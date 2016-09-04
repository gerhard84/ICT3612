<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Task 13</title>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<div class="menu">
    <?php include 'includes/menu.php';?>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Current date</h3>
                </div>
                <div class="panel-body">
                    <?php
                    echo "Today is  " . date('l \t\h\e jS \of F\: h\hi A') . "";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <iframe src="txt/task13.txt" height="400" scrolling="yes" width="1200px">
        <p>Your browser does not support iframes.</p></iframe>

</div>
</body>
</html>


