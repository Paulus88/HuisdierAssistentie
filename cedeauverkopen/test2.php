<?php
include 'huMf6GwI0pbSg1k.php';
if(! $conn ) {
   die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully<br>';
$sql = 'SELECT name FROM track';
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {
      echo "Name: " . $row["id"]. "<br>";
   }
} else {
   echo "0 results";
}
mysqli_close($conn);
?>
