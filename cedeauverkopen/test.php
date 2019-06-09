<?php
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    echo $useragent."<br />";
    function get_client_ip() {
    if (getenv('HTTP_CLIENT_IP'))
        $ip = getenv('HTTP_CLIENT_IP');
        echo $ip
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        echo $ip
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
        echo $ip
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
        echo $ip
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
       echo $ip
    else(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
        echo $ip
    return $ipaddress;}
    echo $get_client_ip;
?>
