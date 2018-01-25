<?php
require_once "vendor/autoload.php";
$mail = new PHPMailer;
//Enable SMTP debugging.
$mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name
$mail->Host = "smtp.zoho.eu";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
//Provide username and password
$mail->Username = "info@huisdierassistentie.nl";
$mail->Password = "Derka123";                       
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";
//Set TCP port to connect to
$mail->Port = 587;
$mail->From = "info@huisdierassistentie.nl";
$mail->FromName = "Full Name";
$mail->addAddress("info@huisdierassistentie.nl", "Recepient Name");
$mail->isHTML(true);
$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";
if(!$mail->send())
{echo "Mailer Error: " . $mail->ErrorInfo;
}else{echo "Message has been sent successfully";}
?>
