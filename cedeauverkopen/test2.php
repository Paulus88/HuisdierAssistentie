<?php
include 'huMf6GwI0pbSg1k.php';
$conn = OpenCon();
//Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = "SELECT * FROM track ORDER BY ID DESC LIMIT 1";
$result = mysqli_query($conn, $query);
if($row = mysql_fetch_assoc($result)){
      $stringTest = $row['balance'];
      echo $stringTest;
}
echo $result;
CloseCon($conn); ?>
