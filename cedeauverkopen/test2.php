<?php
include 'huMf6GwI0pbSg1k.php';
$sql="SELECT * FROM track ORDER BY id DESC";

if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s %s %s %s %s %s %s %s %s %s %s %s<br />",$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11]);
    }
  mysqli_free_result($result);
}

mysqli_close($conn);
?>
