<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Task 12</title>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<div class="menu">
    <?php include 'includes/menu.php';?>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">a) Function: <strong>strlen</strong></h3>
                </div>
                <div class="panel-body">
                    <strong>Explanation:</strong>The <i>strlen</i> function calculates the length of a given string.<br>
                    <strong>Usage: </strong>strlen($str)<br>
                    <strong>String: </strong>PHP is fun<br>
                    <?php
                    $exampleA = "PHP is fun";
                    $exampleAf = strlen($exampleA);
                    echo "<strong>Example:</strong> 'PHP is fun' is <strong>$exampleAf</strong> characters long";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">b) Function: <strong>str_replace</strong></h3>
                </div>
                <div class="panel-body">
                    <strong>Explanation:</strong>The <i>str_replace</i> function replaces part of a string with something els specified.<br>
                    <strong>Usage: </strong>str_replace ($str1, $New, $str2)<br>
                    <strong>String: </strong>Gerhard Goossens<br>
                    <?php
                    $exampleB = "Gerhard Goossens";
                    $exampleBf = str_replace("Gerhard", "Jennifer", $exampleB);
                    echo "<strong>Example: </strong>In the string, $exampleB is being replaced by <strong>$exampleBf</strong>";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">c) Function: <strong>ucfirst</strong></h3>
                </div>
                <div class="panel-body">
                    <strong>Explanation:</strong>The <i>ucfirst</i> function changes the first character of a string to uppercase.<br>
                    <strong>Usage: </strong>ucfirst($str)<br>
                    <strong>String: </strong>unisa<br>
                    <?php
                    $exampleC = "unisa";
                    $exampleCf = ucfirst($exampleC);
                    echo "<strong>Example: </strong>In the string, the first character is changed to uppercase and returns: <strong>$exampleCf</strong>";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">d) Function: <strong>uc_words</strong></h3>
                </div>
                <div class="panel-body">
                    <strong>Explanation:</strong>The <i>ucwords</i> function changes the first character of each word to uppercase.<br>
                    <strong>Usage: </strong>ucwords($str)<br>
                    <strong>String: </strong>this semester was extremely short<br>
                    <?php
                    $exampleD = "this semester was extremely short";
                    $exampleDf = ucwords($exampleD);
                    echo "<strong>Example: </strong>In the string, the first character of each word is changed to uppercase and returns:<br> <strong>$exampleDf</strong>";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">e) Function: <strong>explode</strong></h3>
                </div>
                <div class="panel-body">
                    <strong>Explanation:</strong>The <i>explode</i> function turns a string into an array.<br>
                    <strong>Usage: </strong>explode($sep, $str)<br>
                    <strong>String: </strong>ICT2611 ICT2613 ICT2621 ICT2622 ICT2631<br>
                    <?php
                    $exampleE = "ICT2611 ICT2613 ICT2621 ICT2622 ICT2631";
                    $exampleEf = explode(" ", $exampleE);
                    echo "<strong>Example: </strong>$exampleEf[0] $exampleEf[1] $exampleEf[2] $exampleEf[3] $exampleEf[4]";
                    ?>
                </div>
            </div>
        </div>
    </div>


    <iframe src="txt/task12.txt" height="400" scrolling="yes" width="1200px">
        <p>Your browser does not support iframes.</p></iframe>

</div>
</body>
</html>


