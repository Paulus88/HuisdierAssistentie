<?php
include 'huMf6GwI0pbSg1k.php';
$conn = OpenCon();
$sql = "CREATE TABLE track(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
tm TIMESTAMP,
ref varchar(255) NOT NULL default '',
geo varchar(255) NOT NULL default '',
lat varchar(255) NOT NULL default '',
lon varchar(255) NOT NULL default '',
agent varchar(255) NOT NULL default '',
ipv4 varchar(20) NOT NULL default '',
ipv6 varchar(50) NOT NULL default '',
ip_value int(11) NOT NULL default '0',
domain varchar(20) NOT NULL default '';)

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
CloseCon($conn);
?>
