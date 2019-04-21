<?php
$name = $_POST['your-name'];
$email = $_POST['your-email'];
$message = $_POST['your-message'];
$tel = $_POST['your-tel'];
$huisdier = $_POST['huisdier'];
$soort = $_POST['soort'];
$ras = $_POST['ras'];
$formcontent="Van: $name\nEmail: $email\nTelefoon: $tel\nNaam huisdier: $huisdier\nSoort dier: $soort\nRas dier: $ras\nMessage:\n$message";
$recipient = "info@huisdierassistentie.nl";
$subject = "Website: Hello Huisdier Assistentie";
$mailheader = "From: $email\r\nReply-to: $email\r\nReturn-Path: $email";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error! Ververs de pagina of naam contact op via een andere methode");
header("refresh:4;url=/");
?>
<!doctype html>
<html>
<head>
		<title>Huisdier Assistentie - Duif</title>
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" sizes="192x192" href="images/icon.png">
    <meta name="theme-color" content="#F789DB">
    <meta name="description" content="De individuele/persoonlijke dieren uitlaten, oppas en verblijf met veel ervaring">
    <meta name="keywords" content="hilversum,hondhulp,huisdier,assistentie,verzorg,hond,cat,huisdieren,dog,pet">
    <meta name="author" content="Paul Hemmens">
</head>
<body bgcolor="#89dbf7">
<video autoplay muted loop class="duif">
  <source src="images/duif.mp4" type="video/mp4">
</video>
<div class="duifcontent">
  <h3>Hoi <?php echo "$name"?>!</h3>
  <p>Ik heb de volgende bericht ontvangen:<br /><i><?php echo nl2br("$message")?></i></p>
</div>
</body>
</html>
