<?php
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    echo $useragent."<br />";
$client = getenv('HTTP_CLIENT_IP');
echo $client."<br />";
$xforf = getenv('HTTP_X_FORWARDED_FOR');
echo $xforf."<br />";
$xfor = getenv('HTTP_X_FORWARDED');
echo $xfor."<br />";
$forf = getenv('HTTP_FORWARDED_FOR');
echo $forf."<br />";
$for = getenv('HTTP_FORWARDED');
echo $for."<br />";
$ip = getenv('REMOTE_ADDR');
echo $ip."<br />";
?>
