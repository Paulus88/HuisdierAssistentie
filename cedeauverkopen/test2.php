<?php
include 'huMf6GwI0pbSg1k.php';
$conn = OpenCon();
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
    $sql = "SELECT * FROM track;";  //edit your table name here
    $res = $mysqli->query($sql);
    while ($row = $res->fetch_assoc()) {
    print_r($row);}
    CloseCon($conn); ?>
