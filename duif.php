<<<<<<< HEAD
<?php
require 'class.phpmailer.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'mx.zoho.eu';                // Specify main and backup server
$mail->Port = 25;                                    // Set the SMTP port                        // Enable encryption, 'ssl' also accepted

$mail->From = 'website@huisdierassistentie.nl';
$mail->FromName = 'Website HuisdierAssistentie';
$mail->AddAddress('info@huisdierassistentie.nl');  // Add a recipient           // Name is optional

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <strong>in bold!</strong>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';
?>
=======
<?php
require 'class.phpmailer.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'mx.zoho.eu';                // Specify main and backup server
$mail->Port = 25;                                    // Set the SMTP port                        // Enable encryption, 'ssl' also accepted

$mail->From = 'website@huisdierassistentie.nl';
$mail->FromName = 'Website HuisdierAssistentie';
$mail->AddAddress('info@huisdierassistentie.nl');  // Add a recipient           // Name is optional

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <strong>in bold!</strong>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';
?>
>>>>>>> 91d4d7e3ffff84364119bddeb08d0de8dec7db0b
