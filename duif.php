<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.zoho.eu';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@huisdierassistentie.nl';
    $mail->Password = 'Tugba123';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;


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
