<?php 
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "info@huisdierassistentie.nl";
    $to = $_POST["email"];
    $subject = "PHP Mail Test script";
    $message = $_POST["your-message"]
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Test email sent";
?>
