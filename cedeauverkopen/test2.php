<?php
include 'huMf6GwI0pbSg1k.php';
$conn = OpenCon();
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
if ($result = $conn->query("SELECT * FROM track")) {
    printf("Select returned %d rows.\n", $result->num_rows);
    $result->close();
}
CloseCon($conn); ?>
