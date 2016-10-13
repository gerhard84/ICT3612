<?php
session_start();
use PFBC\Form;
use PFBC\Element;
use PFBC\View;
use PFBC\Validation;
include("assets/PFBC/Form.php");

//  A - Initiate variables
$bookMsg = "";
$mcqMessage = "";

// B - Initiate variables
$name = ""; $surname =  ""; $phone =  ""; $email =  "";
$arrivalDate =  ""; $departureDate = ""; $roomType =  "";
$maxPrice =  ""; $minPrice =  ""; $requirements =  ""; $YesNo   = "";
?>

<?php
// Test to see if Task A has been submitted
// and to echo message to user
 if (isset($_POST['sqlMcq'])) {
  $mcqSelect = $_POST['sqlMcq'];
  if ($mcqSelect == 'Structured Query Language') {
    $mcqMessage = "<strong>Result:</strong> Great!";
  }
  else $mcqMessage = "<strong>Result:</strong> Sorry, try again";
}
?>

<?php
// Test to see if Task B has been submitted
// and create mesage for booking
if (isset($_POST['YesNo'])) {

  // Sanatize Uer input data
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }

$name = test_input($_POST["name"]);
$surname = test_input($_POST["surname"]);
$phone = test_input($_POST["phone"]);
$email = test_input($_POST["email"]);
$arrivalDate = test_input($_POST["arrivalDate"]);
$departureDate = test_input($_POST["departureDate"]);
$roomType = test_input($_POST["roomType"]);
$maxPrice = test_input($_POST["maxPrice"]);
$minPrice = test_input($_POST["minPrice"]);
$requirements = test_input($_POST["requirements"]);
$YesNo = test_input($_POST["YesNo"]);

 $bookMsg = "<h4>Your Booking Details:</h4>
             <strong>Name:</strong> " . $name . "</br>" .
            "<strong>Surname:</strong> " . $surname . "</br>" .
             "<strong>Phone number:</strong> " . $phone . "</br>" .
             "<strong>email address:</strong> " . $email . "</br>" .
             "<strong>Arrival Date:</strong> " . $arrivalDate . "</br>" .
             "<strong>Departure Date:</strong> " . $departureDate . "</br>" .
             "<strong>Room Type:</strong> " . $roomType . "</br>" .
             "<strong>Max Price:</strong> " . $maxPrice . "</br>" .
             "<strong>Min Price:</strong> " . $minPrice . "</br>" .
             "<strong>Notes:</strong> " . $requirements . "</br>";
 }
?>

<!--Import Header and set page title-->
<?php $pageTitle = "Task 11";?>
<?php include './includes/header.php';?>
<body>
<div class="container">
  <!--////////////////////////////// Task 1 (a)  //////////////////////////-->
	<div class="row">
		<div class="col-md-5 col-md-offset-3">
			<div class="panel panel-default">
			  <div class="panel-body">
            <!--Create form Task A-->
            <?php
            $mcqOptions = array("Standard Query Language", "Structured Query Language", "Structured Query Link", "Simple Query Language");
            $mcqForm = new Form("MultipleChoice");
            $mcqForm->addElement(new Element\Hidden("form1", "MultipleChoice"));
            $mcqForm->addElement(new Element\HTML('<legend>Task 11 (a) -  Multiple Choice Application</legend>'));
            $mcqForm->addElement(new Element\HTML('What does SQL stand for?'));
            $mcqForm->addElement(new Element\Radio("", "sqlMcq", $mcqOptions));
            $mcqForm->addElement(new Element\Button);
            $mcqForm->addElement(new Element\Button("Cancel", "button", array(
              "onclick" => "history.go(-1);"
                )));
            $mcqForm->render();
            // Echo MCQ result to user
            echo $mcqMessage;
            ?>
			    </div>
			</div>
		</div>
	</div>
  <!--////////////////////////////// Task 1 (b)  //////////////////////////-->
  <div class="row">
    <div class="col-md-5 col-md-offset-3">
      <div class="panel panel-default">
        <div class="panel-body">
            <!--Create form Task B-->
            <?php
            $hotelList = array("Hilton Cape Town",
                                "Hilton Durban",
                                "Hilton Sandton");
            $roomRadio = array("Single", "Double", "Two Single");
            $form = new Form("hiltonBooking");
            $form->addElement(new Element\Hidden("form", "hiltonBooking"));
            $form->addElement(new Element\HTML('<legend>Task 11 (b) - Hotel Booking Application</legend>'));
            $form->addElement(new Element\HTML('<h4>Personal Information</h4>'));
            $form->addElement(new Element\Textbox("Name:", "name", array(
                  "required" => 1)));
            $form->addElement(new Element\Textbox("Surname:", "surname", array(
                  "required" => 1)));
            $form->addElement(new Element\Phone("Contact Number:", "phone", array(
                  "required" => 1)));
            $form->addElement(new Element\Email("Email:", "email", array(
                  "required" => 1)));
            $form->addElement(new Element\HTML('<h4>Reservation Information</h4>'));
            $form->addElement(new Element\Select("Hotel:", "hotel", $hotelList));
            $form->addElement(new Element\Date("Arrival Date:", "arrivalDate", array(
                  "required" => 1)));
            $form->addElement(new Element\Date("Departure Date:", "departureDate", array(
                  "required" => 1)));
            $form->addElement(new Element\Radio("Room Type:", "roomType", $roomRadio, array(
                  "required" => 1)));
            $form->addElement(new Element\Number("Max Price: R", "maxPrice", array(
                  "required" => 1)));
            $form->addElement(new Element\Number("Min Price: R", "minPrice", array(
                  "required" => 1)));
            $form->addElement(new Element\Textarea("Additional Requirements:", "requirements"));
            $form->addElement(new Element\YesNo("Confirm Booking?", "YesNo", array(
                  "required" => 1)));
            $form->addElement(new Element\Button("Submit"));
            $form->addElement(new Element\Button("Cancel", "button", array(
                  "onclick" => "history.go(-1);"
            )));
            $form->render();
            ?>
            <!--Echo booking info to user-->
            <?php echo $bookMsg;?><br>
          </div>
      </div>
    </div>
  </div>
	<iframe src="txt/task1.txt" height="400" scrolling="yes" width="1200px">
		<p>Your browser does not support iframes.</p></iframe>
</div>
</body>
</html>
