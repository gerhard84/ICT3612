<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Task 7</title>
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
                    <h3 class="panel-title">a) ICT2613 Survey</h3>
                </div>
                <div class="panel-body">
                    <form action=task7.php method=post>
                        <div class="form-horizontal">
                            <div class="span3">
                                <div class="control-group">
                                    <label class="control-label">Student number</label>
                                    <div class="controls">
                                        <input type="number" name="studNum" class="input-medium" >
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Is this your first time taking this module?</label>
                                        <div class="controls">
                                            <input type="radio" name="answer" value="Yes" checked="checked"> Yes
                                            <input type="radio" name="answer" value="No"> No
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">How many times have you done this module?</label>
                                        <div class="controls">
                                            <select name="times">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">What other modules do you have this semester?</label>
                                        <div class="controls">
                                            <input type="checkbox" name="otherMod[]" value="ICT2611">ICT2611<br>
                                            <input type="checkbox" name="otherMod[]" value="ICT2621">ICT2621<br>
                                            <input type="checkbox" name="otherMod[]" value="ICT2622">ICT2622<br>
                                            <input type="checkbox" name="otherMod[]" value="ICT2631">ICT2631
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Please provide feedback on the module:</label>
                                        <div class="controls">
                                            <textarea name="comment" rows="5" cols="44"></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label"></label>
                                        <div class="controls">
                                            <input type="submit" value="Submit" name="submit"><br/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                            <?php
                            // Test if the submit button has been pressed
                            if(isset($_POST['submit'])) {
                                echo '<div class="row">
                                    <div class="col-md-12">
                                    <div class="panel panel-default">
                                    <div class="panel-heading">
                                    <h3 class="panel-title">Feedback results</h3>
                                    </div>
                                    <div class="panel-body">
                                    <div class="control-group">
                                    <div class="controls">';
                                // Assign form fields to variables
                                $studNum = $_POST['studNum'];
                                $answer = $_POST['answer'];
                                $times = $_POST['times'];
                                $comment = $_POST['comment'];

                                // Echo out variables
                                echo "<strong>Student Number:</strong> $studNum</br>";
                                echo "<strong>First time:</strong> $answer</br>";
                                echo "<strong>Times done:</strong> $times</br>";
                                // Tests if other modules has been selected
                                if (isset($_POST['otherMod'])) {
                                    // Assign form checkboxes to variable
                                    $otherModules = $_POST['otherMod'];
                                    // loop to test hat checkboxes was selected
                                    foreach($otherModules as $value) {
                                        // Echo out variables
                                        echo '<strong>Other modules:</strong>' . ' ' . $value. '<br>';
                                    }
                                }
                                echo "<strong>Comments:</strong> $comment";
                            }
                            ?>


    <iframe src="txt/task7.txt" height="400" scrolling="yes" width="1200px">
        <p>Your browser does not support iframes.</p></iframe>

    </div>
</div>
</body>
</html>


