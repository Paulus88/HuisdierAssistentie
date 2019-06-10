<?php
include 'huMf6GwI0pbSg1k.php';
$sql="SELECT * FROM track ORDER BY id";

if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s (%s)\n",$row[0],$row[1]);
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($conn);
?>
