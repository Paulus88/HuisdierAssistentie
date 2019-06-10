<?php
include 'huMf6GwI0pbSg1k.php';
$result = mysqli_query("select * from track");
while ($row = mysql_fetch_object($result)) {
    echo $row->id;
    echo $row->ip;
}
mysql_free_result($result);
mysqli_close($conn);
?>
