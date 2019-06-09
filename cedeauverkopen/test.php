<?php
$useragent = $_SERVER['HTTP_USER_AGENT'];
echo $useragent."<br />";
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
$details = json_decode(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$client));
echo $details->geoplugin_city."<br />";
$details = json_decode(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$xforf));
echo $details->geoplugin_city."<br />";
$details = json_decode(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$xfor));
echo $details->geoplugin_city."<br />";
$details = json_decode(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$forf));
echo $details->geoplugin_city."<br />";
$details = json_decode(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$for));
echo $details->geoplugin_city."<br />";
$details = json_decode(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$ip));
echo $details->geoplugin_city."<br />";
?>
