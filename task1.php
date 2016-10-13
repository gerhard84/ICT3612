<?php $pageTitle = "Task 1";?>
<?php include './includes/header.php';?>
<body>
	<div class="container">
		<!--////////////////////////////// Task 1 (a)  //////////////////////////-->
		<div class="row">
			<div class="col-md-5 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Task 1 - Counter Function</h3>
					</div>
					<div class="panel-body">
						<?php
						// Declare variables for Task 1
						$number1 = counter(5, 12);
						$number2 = counter(12, 12);
						$number3 = counter(25, 30);
						// Function for Task 1
						function counter($num1, $num2) {
							$sum = 0;
							for ($i = $num1; $i <= $num2; $i++) {
								$sum += $i;

							}
							return $sum;
						}
						// Display for Task 1
						echo "The sum of the values from 5 to 12 is $number1. <br/>";
						echo "The sum of the values from 12 to 12 is $number2. <br/>";
						echo "The sum of the values from 25 to 165 is $number3. <br/>";
						?>
					</div>
				</div>
			</div>
		</div>
		<iframe src="txt/task1.txt" height="400" scrolling="yes" width="1200px">
			<p>Your browser does not support iframes.</p></iframe>
		</div>
	</body>
	</html>
