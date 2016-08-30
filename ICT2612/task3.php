<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Task 3</title>
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
                    <h3 class="panel-title">a) If/Else</h3>
                </div>
                <div class="panel-body">
                    <?php
                    //////////////////////////////Task3 ( a ) //////////////////////////
                    // Declare variable name
                    $module = 'ICT2613';
                    // Start a if statement to test $module against certain conditions
                    // Test if variable is empty.
                    if ( empty ($module)) {
                    // If the condition is not met a error is generated
                        $error = 'Module name can\'t be empty.';
                    // Test the variable to see if it is less than 6 characters
                    } else if (strlen($module) <= 6) {
                    // If the condition is not met a error is generated
                        $error = 'Module name must be 6 characters';
                    // Test if the variable's first 3 characters is ICT
                    } else if (substr('ICT2613', 0, 2) === 'ICT') {
                    // If the condition is not met a error is generated
                        $error = 'Module name must start with ICT';
                    // Test if the variable's last 4 characters is 2613
                    } else if (substr('ICT2613', 4, 7) === '2613') {
                    // If the condition is not met a error is generated
                        $error = 'Last four digits must be 2613';
                    // Test if the variable contains a space
                    } else if(ctype_space($module)) {
                    // If the condition is not met a error is generated
                        $error = 'Module name can\'t contain a space';
                    // Test if the variable is ICT2613
                    } else if (substr('ICT2613', 1, 7) === 'ICT2613') {
                    // If the condition is not met a error is generated
                        $error = 'The module name must be ICT2613';
                    // If all conditions is met the variable is printed on screen
                    } else {
                        $error = 'Your module is '. $module;
                    }
                    // If one of the conditions has not been met the appropriate error is printed on screen
                    echo $error;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">b) POST Method</h3>
                </div>
                <div class="panel-body">
                    <!--//////////////////////////////Task3 ( b ) //////////////////////////-->
                    <!--Create a  $_POST method form that contains a drop down list with 6 options-->
                    <form action="task3.php" method="POST">
                        <select name="module_name">
                            <option value="0">Select a Module</option>
                            <option value="1">FAC1501</option>
                            <option value="2">ICT2612</option>
                            <option value="3">ICT2632</option>
                            <option value="4">ICT2641</option>
                            <option value="5">ICT2642</option>
                        </select>
                        <input type="submit" value="Submit"/>
                    </form>
                    <?php
                    echo "<br>";
                    // Tests if the POST option is selected
                    if (isset($_POST['module_name'])) {
                        $module_name = $_POST['module_name'];
                    // Starts a if statement to test what option was selected
                    // and saves it to a new variable.
                        if ($module_name == "1") {
                            $message1 = ("FAC1501");
                        } else if ($module_name == "2") {
                            $message1 = ("ICT2612");
                        } else if ($module_name == "3") {
                            $message1 = ("ICT2632");
                        } else if ($module_name == "4") {
                            $message1 = ("ICT2641");
                        } else if ($module_name == "5") {
                            $message1 = ("ICT2642");
                        }
                    // If no option has been made a default message is displayed
                        else {
                            $message1 = ("Please select a module");
                        }
                    // Prints the selection to the screen
                        echo "You have selected: <strong>$message1</strong>";
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
                    <h3 class="panel-title">c) GET Method</h3>
                </div>
                <div class="panel-body">
                    <!--//////////////////////////////Task3 ( c ) //////////////////////////-->
                    <!--Create a  $_GET method form that contains a drop down list with 6 options-->
                    <form action="task3.php" method="GET">
                        <select name="module_name">
                            <option value="0">Select a Module</option>
                            <option value="1">ICT2611</option>
                            <option value="2">ICT2613</option>
                            <option value="3">ICT2621</option>
                            <option value="4">ICT2622</option>
                            <option value="5">ICT2631</option>
                        </select>
                        <input type="submit" value="Submit"/>
                    </form>
                    <?php
                    echo "<br>";
                    // Tests if the GET option is selected
                    if (isset($_GET['module_name'])) {
                        $module_name = $_GET['module_name'];
                    // Starts a if statement to test what option was selected
                    // and saves it to a new variable.
                        if ($module_name == "1") {
                            $message2 = ("ICT2611");
                        } else if ($module_name == "2") {
                            $message2 = ("ICT2613");
                        } else if ($module_name == "3") {
                            $message2 = ("ICT2621");
                        } else if ($module_name == "4") {
                            $message2 = ("ICT2622");
                        } else if ($module_name == "5") {
                            $message2 = ("ICT2631");
                        }
                    // If no option has been made a default message is displayed
                        else {
                            $message2 = ("Please select a module");
                        }
                    // Prints the selection to the screen
                        echo "You have selected: <strong>$message2</strong>";
                    }
                    ?>
                    <br/>
                </div>
            </div>
        </div>
    </div>

    <iframe src="txt/task3.txt" height="400" scrolling="yes" width="1200px">
        <p>Your browser does not support iframes.</p></iframe>

</div>
</body>
</html>