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
$mailheader = "From:" . $email;
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>
<!doctype html>
<html>
<head>
		<title>Huisdier Assistentie - Duif</title>
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body>
<video autoplay muted loop class="duif">
  <source src="images/duif.mp4" type="video/mp4">
</video>
</body>
</html>
