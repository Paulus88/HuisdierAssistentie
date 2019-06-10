<style type="text/css">*{font-family:calibri,arial,verdana;}</style>
<?php
include 'huMf6GwI0pbSg1k.php';
$sql="SELECT * FROM track ORDER BY id DESC";
if ($result=mysqli_query($conn,$sql))
{
while($row=mysqli_fetch_row($result))
{
printf("<b>Time: %s<br /><br />IPv4s: %s | %s | %s | %s | %s | %s | %s<br /><br />Location: lat %s | lon %s</b><br /><a href=%s target=_blank>Google Maps</a><br /><br /><b>IPv6s: </b>%s | %s | %s | %s | %s | %s | %s<br /><br /><b>Agent OS/Browser: </b>%s %s %s<br /><br /><b>Full IP Information:</b><br />%s<br />%s<br />%s<br />%s<br />%s<br />%s<br />%s<br />%s<br />%s<br />%s<br />%s<br />%s<br />%s<br />%s<hr>",$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11],$row[12],$row[13],$row[
14],$row[15],$row[16],$row[17],$row[18],$row[19],$row[20],$row[21],$row[22],$row[23],$row[24],$row[25],$row[26],$row[27],$row[28],$row[29],$row[30],$row[31],$row[32],$row[33],$row[34],$row[35]);
}
mysqli_free_result($result);
}
mysqli_close($conn);
?>
