<?php
$name = $_POST['your-name'];
$email = $_POST['email'];
$message = $_POST['your-message'];
$tel = $_POST['your-tel'];
$formcontent="From: $name \n Message: $message";
$recipient = "info@huisdierassistentie.nl";
$subject = "Website: Hello Huisdier Assistentie";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
