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
$details = json_decode(file_get_contents("http://ipinfo.io/".$client."/json"));
echo $details->city;
$details = json_decode(file_get_contents("http://ipinfo.io/".$xforf."/json"));
echo $details->city;
$details = json_decode(file_get_contents("http://ipinfo.io/".$xfor."/json"));
echo $details->city;
$details = json_decode(file_get_contents("http://ipinfo.io/".$forf."/json"));
echo $details->city;
$details = json_decode(file_get_contents("http://ipinfo.io/".$for."/json"));
echo $details->city;
$details = json_decode(file_get_contents("http://ipinfo.io/".$ip."/json"));
echo $details->city;
?>
