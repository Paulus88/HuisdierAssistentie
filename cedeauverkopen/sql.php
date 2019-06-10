<?php

   $dbhost = 'huisdierassistentie.cacxu1b4dzkf.eu-central-1.rds.amazonaws.com';
   $dbuser = 'logger';
   $dbpass = '1Logger21';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   echo 'Connected successfully';
   mysql_close($conn);
?>
