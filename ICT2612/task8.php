<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Task 8</title>
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
                    <h3 class="panel-title">a) if/else statements</h3>
                </div>
                <div class="panel-body">
                    <?php
                    //////////////////////////////Task8 (a) //////////////////////////
                    // define variables and set to empty values
                    $number = "";
                    $message = "";
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $number=$_POST['number'];
                        if (!isset($number) || !is_numeric($number) || $number < 0 || $number > 20 ){
                            $message = "Please enter a numeric value between 0 and 20";
                        } else {
                            if ($number <= 9) {
                                $message = "You have entered a single digit number";
                            } else {
                                $message = "You have entered a double digit number";
                            }
                        }
                    }
                    ?>
                    <form name="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        Enter a number between 0 and 20: <input type="text" name="number" size = 1>
                        <br><br>
                        <input type="submit" name="submit" value="Submit">
                    </form>
                    <br>
                    <?php
                    echo $message;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">b) Conditional operator</h3>
                </div>
                <div class="panel-body">

                    <?php
                    //////////////////////////////Task8 (b) //////////////////////////
                    // define variables and set to empty values
                    $number1 = "";
                    $message1 = "";
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $number1 = $_POST['number'];
                        $message1 = ($number1 < 9 ) ? 'You have entered a single digit number' : 'You have entered a double digit number' ;
                    }
                    ?>
                    <form name="form2" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        Enter a number between 0 and 20: <input type="text" name="number" size = 1>
                        <br><br>
                        <input type="submit" name="submit" value="Submit">
                    </form>
                    <br>
                    <?php
                    echo $message1;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">c) For loop</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <?php
                        //////////////////////////////Task8 (c) //////////////////////////
                        $num = 1;
                        for ($i = 5; $i >= 0.5; $i -= 0.5) {
                            echo "<tr>";
                            echo "<td>$num</td>";
                            echo "<td>$i</td>";
                            echo "</tr>";
                            $num++;

                            if ($num > 9) {
                                $num = 0;}
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">d) While loop</h3>
                </div>
                <div class="panel-body">
                    <?php
                    //////////////////////////////Task8 (d) //////////////////////////
                    echo "x = 1";
                    echo "<br>";
                    echo "y = 10";
                    echo "<br>";
                    echo "<br>";
                    $i= 1;
                    $num= 10;
                    while( $i < 10){
                        echo "$num ";
                        $num--;
                        $i++; }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <iframe src="txt/task8.txt" height="400" scrolling="yes" width="1200px">
        <p>Your browser does not support iframes.</p></iframe>

</div>
</body>
</html>