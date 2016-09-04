<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Task 2</title>
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
                    <h3 class="panel-title">a) Relational operators</h3>
                </div>
                <div class="panel-body">
                    <?php
                    // Declare variables for task 2
                    $a = 10 ;
                    $b = 20 ;

                    //////////////////////////////Task2 (a 1) //////////////////////////
                    // use relational operators to compare variables and echo result
                    if($a > $b){
                        echo "RESULT 1 : a is equal to b";
                    }else{
                        echo "RESULT 1 : a is not equal to b";
                    }

                    echo "<br>";

                    //////////////////////////////Task2 (a 2) //////////////////////////
                    // use relational operators to compare variables and echo result
                    if($a > $b){
                        echo "RESULT 2 : a is greater than b";
                    }else{
                        echo "RESULT 2 : a is not greater than b";
                    }

                    echo "<br>";

                    //////////////////////////////Task2 (a 3) //////////////////////////
                    // use relational operators to compare variables and echo result
                    if($a < $b){
                        echo "RESULT 3 : a is less than b";
                    }else{
                        echo "RESULT 3 : a is not less than b";
                    }

                    echo "<br>";

                    //////////////////////////////Task2 (a 4) //////////////////////////
                    // use relational operators to compare variables and echo result
                    if($a = $b){
                        echo "RESULT 4 : a is not equal to b";
                    }else{
                        echo "RESULT 4 : a is equal to b";
                    }

                    echo "<br>";

                    //////////////////////////////Task2 (a 5) //////////////////////////
                    // use relational operators to compare variables and echo result
                    if($a != $b){
                        echo "RESULT 5 : a is either greater than or equal to b";
                    }else{
                        echo "RESULT 5 : a is neither greater than nor equal to b";
                    }

                    echo "<br>";

                    //////////////////////////////Task2 (a 6) //////////////////////////
                    // use relational operators to compare variables and echo result
                    if($a <= $b){
                        echo "RESULT 6 : a is either less than or equal to b";
                    }else{
                        echo "RESULT 6: a is neither less than nor equal to b";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">b) number_format</h3>
                </div>
                <div class="panel-body">
                    <!--//////////////////////////////Task2 ( b ) //////////////////////////-->
                    <?php
                    // Declare variables
                    $string1 = 'The LOTTO Jackpot is a guaranteed R';
                    $string2 = '. Don\'t buy a ticket yet.';
                    $string3 = '. BUY A TICKET NOW NOW!';
                    $jackpot = 1000000;
                    // Use a while loop to test if $jackpot is 1 000 0000
                    while ($jackpot < 10000000) {
                    // Use number_format to display numbers in more readable format
                       $jackFormat = number_format($jackpot,2,",",".");
                    // Echo jackpot amount and concatenate appropriate strings
                       echo $string1 . $jackFormat . $string2 . "<br>";
                    // Add 1 000000 to jackpot amount
                        $jackpot += 1000000;
                    }
                    // Jump out of while loop if jackpot is 10 000 000
                    // Use number_format to display numbers in more readable format
                    $jackFormat = number_format($jackpot,2,",",".");
                    // Echo jackpot amount and concatenate appropriate strings
                    echo $string1 . $jackFormat . $string3 . "<br>";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <iframe src="txt/task2.txt" height="400" scrolling="yes" width="1200px">
        <p>Your browser does not support iframes.</p></iframe>
</div>
</body>
</html>


