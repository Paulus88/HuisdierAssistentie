<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
navigator.geolocation.getCurrentPosition(function(position){
var positionInfo = "Your current position is (" + "Latitude: " + position.coords.latitude + ", " + "Longitude: " + position.coords.longitude + ")";
var javavar=document.getElementById("text").value;
document.getElementById("result").innerHTML = positionInfo;
document.getElementById("result").innerHTML="
<?php
$phpvar='"+javavar+"';
echo $phpvar;
?>";});
</script><?php
$client = $_SERVER['HTTP_CLIENT_IP'];
echo $client."<br />";
$xforf = $_SERVER['HTTP_X_FORWARDED_FOR'];
echo $xforf."<br />";
$xfor = $_SERVER['HTTP_X_FORWARDED'];
echo $xfor."<br />";
$forf = $_SERVER['HTTP_FORWARDED_FOR'];
echo $forf."<br />";
$for = $_SERVER['HTTP_FORWARDED'];
echo $for."<br />";
$ip = $_SERVER['REMOTE_ADDR'];
echo $ip."<br />";
$ipa = $_GET['addr'];
echo $ipa."<br />";
$v6 = preg_match("/^[0-9a-f]{1,4}:([0-9a-f]{0,4}:){1,6}[0-9a-f]{1,4}$/", $ip);
echo $v6."<br />";
echo var_export(unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$client)))."<br />";
echo var_export(unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$xforf)))."<br />";
echo var_export(unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$xfor)))."<br />";
echo var_export(unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$forf)))."<br />";
echo var_export(unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$for)))."<br />";
echo var_export(unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$ip)))."<br />";
$agent = $_SERVER['HTTP_USER_AGENT'];
echo $agent."<br />";
global $HTTP_SERVER_VARS;
$agent = $HTTP_SERVER_VARS['HTTP_USER_AGENT'];
echo $agent."<br />";
global $HTTP_USER_AGENT;
$agent = $HTTP_USER_AGENT;
echo $agent."<br />";
?>
<div id="result">
</div>
