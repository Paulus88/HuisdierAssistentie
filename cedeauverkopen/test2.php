<?php
include 'huMf6GwI0pbSg1k.php';
$conn = OpenCon();
    if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $sql = "SELECT * FROM track;";  //edit your table name here
    $res = $mysqli->query($sql);
    while ($row = $res->fetch_assoc()) {
    print_r($row);}
    CloseCon($conn); ?>
