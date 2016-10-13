<?php $pageTitle = "Task 2";?>
<?php include './includes/header.php';?>


<body>
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Task 2 -  Passing argument by reference</h3>
					</div>
					<div class="panel-body">
						<!--////////////////////////////// Task 2 (a)  //////////////////////////-->

						<?php
						function square1($number) {
							return $number * $number;
						}
						$val = 5;
						$val = square1($val);
						echo "The square of 5 is " . $val;
						?>

					</br>

						<?php
						function square2(&$number) {
							$number = $number * $number;
						}
						$val = 9;
						square2($val);
						echo "The square of 9 is " . $val;
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
