<script>
navigator.geolocation.getCurrentPosition(function (position){var lat=position.coords.latitude;var lon=position.coords.longitude;document.cookie="lat=" + lat;document.cookie="lon=" + lon;});</script>
<?php
$lat = NULL;
$lon = NULL;
$client = NULL;
$xforf = NULL;
$xfor = NULL;
$forf = NULL;
$for = NULL;
$ip = NULL;
$ipa = NULL;
$agent = NULL;
$hagent = NULL;
$gagent = NULL;

global $HTTP_SERVER_VARS;
global $HTTP_USER_AGENT;
$lat = $_COOKIE['lat'];
$lon = $_COOKIE['lon'];
$client = $_SERVER['HTTP_CLIENT_IP'];
$xforf = $_SERVER['HTTP_X_FORWARDED_FOR'];
$xfor = $_SERVER['HTTP_X_FORWARDED'];
$forf = $_SERVER['HTTP_FORWARDED_FOR'];
$for = $_SERVER['HTTP_FORWARDED'];
$ip = $_SERVER['REMOTE_ADDR'];
$ipa = $_GET['addr'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$hagent = $HTTP_SERVER_VARS['HTTP_USER_AGENT'];
$gagent = $HTTP_USER_AGENT;

echo $lat."<br />";
echo $lon."<br />";
if ($lon == NULL){header("Refresh:5");}else{
echo "https://maps.google.com/maps?q=loc:".$lat."+".$lon."<br />";}

if ($client != NULL){
echo $client."<br />";
$clientv6 = preg_match("/^[0-9a-f]{1,4}:([0-9a-f]{0,4}:){1,6}[0-9a-f]{1,4}$/", $_SERVER['HTTP_CLIENT_IP']);
echo $clientv6."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$client)))."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$clientv6)))."<br />";}

if ($xforf != NULL){
echo $xforf."<br />";
$xforfv6 = preg_match("/^[0-9a-f]{1,4}:([0-9a-f]{0,4}:){1,6}[0-9a-f]{1,4}$/", $_SERVER['HTTP_X_FORWARDED_FOR']);
echo $xforfv6."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$xforf)))."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$xforfv6)))."<br />";}

if ($xfor != NULL){
echo $xfor."<br />";
$xforv6 = preg_match("/^[0-9a-f]{1,4}:([0-9a-f]{0,4}:){1,6}[0-9a-f]{1,4}$/", $_SERVER['HTTP_X_FORWARDED']);
echo $xforv6."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$xfor)))."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$xforv6)))."<br />";}

if ($forf != NULL){
echo $forf."<br />";
$forfv6 = preg_match("/^[0-9a-f]{1,4}:([0-9a-f]{0,4}:){1,6}[0-9a-f]{1,4}$/", $_SERVER['HTTP_FORWARDED_FOR']);
echo $forfv6."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$forf)))."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$forfv6)))."<br />";}

if ($for != NULL){
echo $for."<br />";
$forv6 = preg_match("/^[0-9a-f]{1,4}:([0-9a-f]{0,4}:){1,6}[0-9a-f]{1,4}$/", $_SERVER['HTTP_FORWARDED']);
echo $forv6."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$for)))."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$forv6)))."<br />";}
echo $for."<br />";

if ($ip != NULL){
echo $ip."<br />";
$ipv6 = preg_match("/^[0-9a-f]{1,4}:([0-9a-f]{0,4}:){1,6}[0-9a-f]{1,4}$/", $_SERVER['REMOTE_ADDR']);
echo $ipv6."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$ip)))."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$ipv6)))."<br />";}

if ($ipa != NULL){
echo $ipa."<br />";
$ipav6 = preg_match("/^[0-9a-f]{1,4}:([0-9a-f]{0,4}:){1,6}[0-9a-f]{1,4}$/", $_GET['addr']);
echo $ipav6."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$ipa)))."<br />";
echo var_export(unserialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$ipav6)))."<br />";}

echo $agent."<br />";
echo $hagent."<br />";
echo $gagent."<br />";
?>
