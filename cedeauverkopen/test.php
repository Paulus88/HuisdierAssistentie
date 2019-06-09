<script>
navigator.geolocation.getCurrentPosition(function (position){var lat=position.coords.latitude;var lon=position.coords.longitude;document.cookie="lat=" + lat;document.cookie="lon=" + lon;});</script>
<?php
$lat = $_COOKIE['lat'];
$lon = $_COOKIE['lon'];
$client = $_SERVER['HTTP_CLIENT_IP'];
$xforf = $_SERVER['HTTP_X_FORWARDED_FOR'];
$xfor = $_SERVER['HTTP_X_FORWARDED'];
$forf = $_SERVER['HTTP_FORWARDED_FOR'];
$for = $_SERVER['HTTP_FORWARDED'];
$ip = $_SERVER['REMOTE_ADDR'];
$ipa = $_GET['addr'];
echo $lat."<br />";
echo $lon."<br />";
if ($lon == NULL){header("Refresh:5");}else{
echo "https://maps.google.com/maps?q=loc:".$lat."+".$lon."<br />";}

if ($client != NULL){
echo $client."<br />";
$clientv6 = preg_match("/^[0-9a-f]{1,4}:([0-9a-f]{0,4}:){1,6}[0-9a-f]{1,4}$/", $client);
echo $clientv6."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$client)))."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$clientv6)))."<br />";}

if ($xforf != NULL){
echo $xforf."<br />";
$xforfv6 = preg_match("/^[0-9a-f]{1,4}:([0-9a-f]{0,4}:){1,6}[0-9a-f]{1,4}$/", $xforf);
echo $xforfv6."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$xforf)))."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$xforfv6)))."<br />";}

echo $xfor."<br />";

echo $forf."<br />";

echo $for."<br />";

echo $ip."<br />";

echo $ipa."<br />";
$v6 = preg_match("/^[0-9a-f]{1,4}:([0-9a-f]{0,4}:){1,6}[0-9a-f]{1,4}$/", $ip);

echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$xforf)))."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$xfor)))."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$forf)))."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$for)))."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$ip)))."<br />";
$agent = $_SERVER['HTTP_USER_AGENT'];
echo $agent."<br />";
global $HTTP_SERVER_VARS;
$agent = $HTTP_SERVER_VARS['HTTP_USER_AGENT'];
echo $agent."<br />";
global $HTTP_USER_AGENT;
$agent = $HTTP_USER_AGENT;
echo $agent."<br />";
?>
