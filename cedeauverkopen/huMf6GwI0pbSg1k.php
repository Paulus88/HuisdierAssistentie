<?php
function OpenCon()
 {
 $dbhost = "huisdierassistentie.cacxu1b4dzkf.eu-central-1.rds.amazonaws.com";
 $dbuser = "logger";
 $dbpass = "1Logger21";
 $db = "cedeauverkopen";
 $conn = new mysqli($dbhost,$dbuser,$dbpass,$db) or die("echo Connect failed: %s\n". $conn -> error);
 return $conn;
 echo yes!
 }
function CloseCon($conn)
 {
 $conn -> close();
 }?>
