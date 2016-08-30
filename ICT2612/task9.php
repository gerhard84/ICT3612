<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Task 9</title>
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
                    <h3 class="panel-title">a) Switch statement</h3>
                </div>
                <div class="panel-body">
                    Please select a greeting from the list below and click submit to find out what language it is from.<br>
                    <form method="GET">
                        <select name="greeting">
                            <option value="">Options</option>
                            <option value="sanibonani">Sanibonani</option>
                            <option value="molo">Molo</option>
                            <option value="hallo">Hallo</option>
                            <option value="thobela">Thobela</option>
                            <option value="dumela">Dumela</option>
                            <option value="lumela">Lumela</option>
                            <option value="abusheni">Abusheni</option>
                            <option value="sanibona">Sanibona</option>
                            <option value="avuwani">Avuwani</option>
                            <option value="salibonani">Salibonani</option>
                        </select>
                        <input type="submit" name="submit">
                    </form>
                    <br>

                    <?php
                    if(isset($_GET['submit'])) {
                        switch($_GET['greeting']) {
                            Case 'sanibonani' : echo "In isiZulu 'Sanibonani' means Hello.";
                                break;
                            Case 'molo' : echo "In <em>isiXhosa</em>, <strong>Molo</strong> means hello.";
                                break;
                            Case 'hallo' : echo "In <em>Afrikaans</em>, <strong>Hallo</strong> means hello.";
                                break;
                            Case 'thobela' : echo "In <em>Sepedi</em>, <strong>Thobela</strong> means hello.";
                                break;
                            Case 'dumela' : echo "In <em>Setswana</em>, <strong>Dumela</strong> means hello.";
                                break;
                            Case 'lumela' : echo "In <em>Sesotho</em>, <strong>Lumela</strong> means hello.";
                                break;
                            Case 'abusheni' : echo "In <em>Xitsonga</em>, <strong>Abusheni</strong> means hello.";
                                break;
                            Case 'sanibona' : echo "In <em>SiSwati</em>, <strong>Sanibona</strong> means hello.";
                                break;
                            Case 'avuwani' : echo "In <em>Tshivenda</em>, <strong>Avuwani</strong> means hello.";
                                break;
                            Case 'salibonani' : echo "In <em>isiNdebele</em>, <strong>Salibonani</strong> means hello.";
                                break;
                            default: echo "Please make a selection.";
                                break;
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>




    <iframe src="txt/task9.txt" height="400" scrolling="yes" width="1200px">
        <p>Your browser does not support iframes.</p></iframe>

</div>
</body>
</html>


