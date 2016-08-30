<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-6">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Task 5</title>
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
                    <h3 class="panel-title">a) Create and delete Customer</h3>
                </div>
                <div class="panel-body">
                    <h3>Add new customer</h3>

                    <!--Create HTML form-->
                    <form name="newCustomer" action="" method="post">
                    <div class="form-horizontal">
                        <div class="span3">
                            <div class="control-group">
                                <label class="control-label">Name</label>
                                <div class="controls">
                                    <input type="text" name="firstName" class="input-medium" >
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Surname</label>
                                    <div class="controls">
                                        <input type="text" name="lastName" class="input-medium">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Email Address</label>
                                    <div class="controls">
                                        <input type="text" name="emailAddress" class="input-medium">
                                    </div>
                                </div><br>
                                <input type="submit" value="Submit" name="submit"><br/>
                            </div>
                </div>
                    </form>
                    <div class="control-group">
                        <label class="control-label"></label>
                        <div class="controls">
                            <?php
                            require 'database.php';
                            if(isset($_GET['customerID'])){
                                $customerID = $_GET['customerID'];
                                $sql = "DELETE FROM customers WHERE customerID = $customerID";
                                $db = $db->exec($sql);
                            }

                            if($_SERVER['REQUEST_METHOD']=="POST"){
                                $firstName=$_POST['firstName'];
                                $lastName=$_POST['lastName'];
                                $emailAddress=$_POST['emailAddress'];
                                $sql = "INSERT INTO customers
                                      (firstName, lastName, emailAddress)
                                      VALUES ('$firstName', '$lastName', '$emailAddress')";
                                $db = $db->exec($sql);}

                            if(isset($_POST['submit']) || isset($_GET['customerID'])) {
                            require 'database.php';
                            //The SQL SELECT statement//
                            $sql = "SELECT * FROM customers";
                            $result = $db->query($sql);
                            ?>
                            <table class='table table-bordered table-hover'>
                                <tr>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>eMail address</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                while ($row = $result->fetch(PDO::FETCH_ASSOC))  {
                                    ?>
                                    <form action=task5.php method=post>
                                        <tr>
                                            <td><?php echo htmlentities($row['firstName']); ?></td>
                                            <td><?php echo htmlentities($row['lastName']); ?></td>
                                            <td><?php echo htmlentities($row['emailAddress'])?></td>
                                            <td><a href="task5.php?customerID=<?php echo urlencode($row['customerID']);?>">delete</a></td>
                                        </tr>
                                    </form>
                                    <?php
                                }
                                echo "</table>";
                                }
                                ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>


    <iframe src="txt/task5.txt" height="400" scrolling="yes" width="1200px">
        <p>Your browser does not support iframes.</p></iframe>

</div>
</body>
</html>