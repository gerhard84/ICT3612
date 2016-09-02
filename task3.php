<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Task 1</title>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<div class="menu">
    <?php include 'includes/menu.php';?>
</div>


<!--////////////////////////////// Task 1  //////////////////////////-->


<div class="container">
  					<!--////////////////////////////// Task 3 (a)  //////////////////////////-->
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default">
			    <div class="panel-heading">
			        <h3 class="panel-title">Task 3 (a) -  Pizza Toppings</h3>
			    </div>
			    <div class="panel-body">



          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
          	<p>
          		Which extra toppings whould you like?<br/>
          		<input type="checkbox" name="formToppings[]" value="Pepperoni" />Pepperoni<br />
          		<input type="checkbox" name="formToppings[]" value="Sausage" />Sausage<br />
          		<input type="checkbox" name="formToppings[]" value="Bacon" />Bacon<br />
          		<input type="checkbox" name="formToppings[]" value="Pineapple" />Pineapple<br />
          	</p>
            <p>
          	<input type="submit" name="formSubmit" value="Submit" />
          </form>
          	</p>
          <?php
          // Function to check what toppings is selected on form submit
          function IsChecked($chkname,$value)
          {
              if(!empty($_POST[$chkname]))
              {
                  foreach($_POST[$chkname] as $chkval)
                  {
                      if($chkval == $value)
                      {
                          return true;
                      }
                  }
              }
              return false;
          }

            // Submit button action
            if(isset($_POST['formSubmit']))
              {
              $aToppings = $_POST['formToppings'];

              if(empty($aToppings))
                  {
                echo("<p>You didn't select any toppings.</p>\n");
              }
                  else
                  {
                      $N = count($aToppings);

                echo("<p>You selected $N extra toppings(s): ");
              }

                  //Checking whether a particular check box is selected with Function
                  if(IsChecked('formToppings','Pepperoni'))
                  {
                      echo ' Pepperoni, ';
                  }
                  if(IsChecked('formToppings','Sausage'))
                  {
                      echo ' Sausage, ';
                  }
                  if(IsChecked('formToppings','Bacon'))
                  {
                      echo ' Bacon, ';
                  }
                  if(IsChecked('formToppings','Pineapple'))
                  {
                      echo ' Pineapple, ';
                  }
            }
          ?>

			    </div>
			</div>
		</div>
	</div>
                      <!--//////////////////////////////Task3 ( b ) //////////////////////////-->
  <div class="row">
          <div class="col-md-6">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Task 3 (b) -  Number Average</h3>
                  </div>
                  <div class="panel-body">
                    <?php
                    //Function to calculate average with variable-length parameter list
                    function average()
                      {
                        // Built in function to get amount of items in array
                        $numargs = func_num_args();

                        //Get ampunt of aruments and divide by values to calculate average
                        $average = array_sum(func_get_args())/func_num_args();
                        
                        //Display Number of argumets in array and average
                        echo "The average of $numargs numbers must be calculated.<br/>";
                        echo "Average = $average";
                      }
                      // Call function with numbers as requested
                      average (10,14,18,22);
                      ?>

                    </div>
          			</div>
          		</div>
          	</div>


	<iframe src="txt/task3.txt" height="400" scrolling="yes" width="1200px">
		<p>Your browser does not support iframes.</p></iframe>

</div>
</body>
</html>
