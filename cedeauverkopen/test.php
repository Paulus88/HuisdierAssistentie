<script>
navigator.geolocation.getCurrentPosition(function(position){
var lat = position.coords.latitude;
var lon = position.coords.longitude;
document.getElementById("lat").innerHTML = lat;;
document.getElementById("lon").innerHTML = lon;});
</script><?php
$lat = new DomDocument();
$lon = new DomDocument();
echo $geo."<br />";
$lati = $lat->getElementById('lat');
echo $lati->textContent."<br />";
$long = $lon->getElementById('lon');
echo $long->textContent."<br />";
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
<div id="lat">
</div>
