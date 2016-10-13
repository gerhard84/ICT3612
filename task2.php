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
						function add_3_by_val($value) {
							$value += 3;
							echo '<p>Number: ' . $value . "</p>";
						}
						$number = 5;
						add_3_by_val($number);
						echo '<p>Number: ' . $number . "</p>";
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
