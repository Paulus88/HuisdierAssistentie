<?php
include 'huMf6GwI0pbSg1k.php';
$conn = OpenCon();
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo $conn;
$result = $conn->query("SELECT * FROM track");
  echo $result;
    printf("Select returned %d rows.\n", $result->num_rows);
    $result->close();
CloseCon($conn); ?>
