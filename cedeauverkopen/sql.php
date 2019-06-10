   <?php
   $host = 'huisdierassistentie.cacxu1b4dzkf.eu-central-1.rds.amazonaws.com:3306';
   $user = 'logger';
   $pass = '1Logger21';
   $conn = mysqli($host, $user, $pass);
   if(! $conn )
   {
     die('Could not connect: ' . mysqli_error());
   }
   echo 'Connected successfully';
   mysqli_close($conn);
   ?>
