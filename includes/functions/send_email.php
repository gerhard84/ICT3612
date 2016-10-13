<?php
require("includes/PHPMailer/PHPMailerAutoload.php");

function send_email($target_file) {
  $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

//$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gerhard-goossens.co.za';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'webmaster@gerhard-goossens.co.za';                 // SMTP username
$mail->Password = 'G3rhaAr6ict3612';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('webmaster@gerhard-goossens.co.za', 'Gerhard Goossens');
$mail->addAddress('"12345@wherever.com', 'ICT3612');     // Add a recipient
//$mail->addAddress('gerhard.g84@gmail.com');               // Name is optional
$mail->addReplyTo('webmaster@gerhard-goossens.co.za', 'Gerhard Goossens');
//$mail->addCC('cc@example.com');
$mail->addBCC('gerhard.g84@gmail.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Your resent file upload';
$mail->Body    = 'You recently uploaded a file to the portfolio website. </br>
                  The filename is: ' .$target_file;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';    
}


}
?>
