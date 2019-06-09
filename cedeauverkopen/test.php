<?php
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
echo var_export(unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$client))) . "\n\n";
echo var_export(unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$xforf))) . "\n\n";
echo var_export(unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$xfor))) . "\n\n";
echo var_export(unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$forf))) . "\n\n";
echo var_export(unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$for))) . "\n\n";
echo var_export(unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$ip))) . "\n\n";
$useragent = $_SERVER['HTTP_USER_AGENT'];
echo $useragent . "\n\n";
$browser = get_browser(null, true);
print_r($browser);
?>
