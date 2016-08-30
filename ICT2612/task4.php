<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Task 4</title>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<div class="menu">
    <?php include 'includes/menu.php';?>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">a) Customer list</h3>
                </div>
                <div class="panel-body">
                    <?php
                    require 'database.php';
                    //The SQL SELECT statement//
                    $sql = "SELECT customerID, firstName, lastName, emailAddress FROM customers";
                    // Put result query in variable
                    $result = $db->query($sql);

                    // Create rable
                    echo "<table class='table table-bordered table-hover'>
                        <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>eMail address</th>
                        </tr>";
                    // Output rows
                    while ($row = $result->fetch(PDO::FETCH_ASSOC))  {
                        echo "<form action=task5.php method=post>";
                        echo "<tr>";
                        echo "<td>" . $row['firstName'] . "</td>";
                        echo "<td>" . $row['lastName'] . "</td>";
                        echo "<td>" . $row['emailAddress'] . "</td>";
                        echo "</tr>";
                        echo "</form>";
                    }
                    echo "</table>";
                    // Close connection to DB
                    $db = null;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <iframe src="txt/task4.txt" height="400" scrolling="yes" width="1200px">
        <p>Your browser does not support iframes.</p></iframe>

</div>
</body>
</html>


