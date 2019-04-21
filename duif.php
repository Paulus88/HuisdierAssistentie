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
$mailheader = "From: $email\r\nReply-to: $email";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error! Ververs de pagina of naam contact op via een andere methode");
header("refresh:4;url=/");
?>
<!doctype html>
<html>
<head>
		<title>Huisdier Assistentie - Duif</title>
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body bgcolor="#89dbf7">
<video autoplay muted loop class="duif">
  <source src="images/duif.mp4" type="video/mp4">
</video>
<div class="duifcontent">
  <h3>Hoi <?php echo "$name"?>!</h3>
  <p>Ik heb de volgende bericht ontvangen: <i><?php echo "$message"?></i></p>
</div>
</body>
</html>
