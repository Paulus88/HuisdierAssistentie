<?php
include 'huMf6GwI0pbSg1k.php';
$conn = OpenCon();
    $sql = "SELECT * FROM track;";  //edit your table name here
    $res = $mysqli->query($sql);
    while ($row = $res->fetch_assoc()) {
    print_r($row);}
    CloseCon($conn); ?>
