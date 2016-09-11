<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Task 10</title>
</head>




<body>
<?php include_once("analyticstracking.php") ?>
<div class="menu">
    <?php include 'includes/menu.php';?>
</div>


<div class="container">
  <!--////////////////////////////// Task 10 (a)  //////////////////////////-->

  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default">
          <div class="panel-heading">
              <h3 class="panel-title">Task 10 -  Display folder contents</h3>
          </div>
          <div class="panel-body">
          <?php
            $dir = opendir('txt/task10/');
            while ($file = readdir($dir)) {
              if ($file == '.' || $file == '..') {
                continue;
              }
              echo $file . "</br>";
            }
            closedir($dir);
          ?>
          </div>
      </div>
    </div>
  </div>

	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default">
			    <div class="panel-heading">
			        <h3 class="panel-title">Task 10 -  Upload File</h3>
			    </div>
			    <div class="panel-body">
            <h5> Please select a <strong>.txt</strong> file to upload:</h5>
          <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload">
            </br>
            <input type="submit" value="Upload">
          </form>
        </br>



			    </div>
			</div>
		</div>
	</div>


  <div class="row">
		<div class="col-md-6">
			<div class="panel panel-default">
			    <div class="panel-heading">
			        <h3 class="panel-title">Task 10 -  Display file content</h3>
			    </div>
			    <div class="panel-body">


          <?php
          $ctime = 0;
          foreach (glob('txt/task10/*.txt') as $file)
          {
          if ($ctime > filectime($file))
          {
          $match = $file;
          $ctime = filectime($file);
          }
          }
          echo "<strong>The contents of the file is:</strong></br>";
          $latestFile = fopen("$file", "r") or die("Please upload a file");
          while (!feof($latestFile)) {
            $line = fgets($latestFile);
            echo "$line</br>";
          }

          fclose($latestFile);          
          ?>

			    </div>
			</div>
		</div>
	</div>




	<iframe src="txt/task10.txt" height="400" scrolling="yes" width="1200px">
		<p>Your browser does not support iframes.</p></iframe>

</div>
</body>
</html>
