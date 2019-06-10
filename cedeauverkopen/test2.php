<?php
include 'huMf6GwI0pbSg1k.php';

$query = "SELECT * FROM track"; //You don't need a ; like you do in SQL
$result = mysqli_query($query);

echo "<table>"; // start a table tag in the HTML

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['ip'] . "</td><td>" . $row['agent'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

mysql_close(); //Make sure to close out the database connection ?>
