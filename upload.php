<?php
include("includes/functions/send_email.php");

$target_dir = "txt/task10/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$uploadError = "Error";
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"])) {
        $uploadOk = 1;
      }

// Check if file already exists
if (file_exists($target_file)) {
    $uploadOk = 0;
    $uploadError = "Sorry, file already exists.";

}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 100000) {
    $uploadOk = 0;
    $uploadError = "Sorry, your file is too large.";

}
// Only Allow TXT files
if($fileType != "txt" ) {
    $uploadOk = 0;
    $uploadError = "Sorry, only TXT files are allowed.";

}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo $uploadError;


// if everything is ok, try to upload file and send email
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        send_email($target_file);

        echo "<meta http-equiv=\"refresh\" content=\"0;URL=task10.php\">";
    } else {
        $uploadError = "Sorry, there was an error uploading your file.";
    }
}
?>
