<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Task 14</title>
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
                    <h3 class="panel-title">a) Integers as index values</h3>
                </div>
                <div class="panel-body">
                    <?php
                    $modules = array("ICT2611", "ICT2613", "ICT2621", "ICT2622", "ICT2631");

                    foreach($modules as $key=>$value){
                        echo "The index <strong>$key</strong> holds $value<br>";
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">b) Strings as index values</h3>
                </div>
                <div class="panel-body">
                    <?php
                    $modules = array();
                    $modules ["first"] = "FAC1501";
                    $modules ["second"] = "ICT2612";
                    $modules ["third"] = "ICT2632";
                    $modules ["fourth"] = "ICT2641";
                    $modules ["fifth"] = "ICT2642";

                    foreach($modules as $key=>$value){
                        echo "The index <strong>$key</strong> holds $value<br>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <iframe src="txt/task14.txt" height="400" scrolling="yes" width="1200px">
        <p>Your browser does not support iframes.</p></iframe>

</div>
</body>
</html>


