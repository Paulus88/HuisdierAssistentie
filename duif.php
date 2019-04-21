<?php
$name = $_POST['your-name'];
$email = $_POST['your-email'];
$message = $_POST['your-message'];
$tel = $_POST['your-tel'];
$huisdier = $_POST['huisdier'];
$soort = $_POST['soort'];
$ras = $_POST['ras'];
$formcontent="Van: $name \n Email: $email \n Telefoon: $tel \n Naam huisdier: $huisdier \n Soort dier: $soort \n Ras dier: $ras \n Message: $message";
$recipient = "info@huisdierassistentie.nl";
$subject = "Website: Hello Huisdier Assistentie";
$mailheader = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n" . 'X-Mailer: PHP/' . phpversion();
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
