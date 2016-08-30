<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <title>Task 11</title>
</head>
<body>
<?php include_once("../analyticstracking.php") ?>
<div class="menu">
    <?php include '../includes/menu.php';?>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">a) MVC pattern</h3>
                </div>
                <div class="panel-body">

<h2>Prominent South African political parties</h2>

<p>
<a href="controller/controller.php?page=parties">List of the most prominent South African political parties</a></br>
<a href="controller/controller.php?page=seats">National Assembly seats per party</a></br>
</p>
                </div>
            </div>
        </div>
    </div>



    <iframe src="../txt/task11.txt" height="400" scrolling="yes" width="1200px">
        <p>Your browser does not support iframes.</p></iframe>

</div>
</body>
</html>