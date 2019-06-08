<?php
include 'huMf6GwI0pbSg1k.php';
$conn = OpenCon();
$sql = "CREATE TABLE track(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
tm TIMESTAMP,
ref varchar(255),
geo varchar(255),
lat varchar(255),
lon varchar(255),
agent varchar(255),
ipv4 varchar(20),
ipv6 varchar(50),
ip_value int(11),
domain varchar(20))";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
CloseCon($conn);
?>
