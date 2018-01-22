<?php use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'mx.zoho.eu';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@dereisplanner.nl';
    $mail->Password = 'Tugba123';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;


    $mail->setFrom('info@huisdierassistentie.nl', 'Your Name');
    $mail->addAddress('info@huisdierassistentie.nl', 'My Friend');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Mail Subject!';
    $mail->Body    = 'This is SMTP Email Test';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}}
?>
