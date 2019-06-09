<?php
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    echo $useragent."<br />";
    function get_client_ip() {
    if (getenv('HTTP_CLIENT_IP'))
        $ip = getenv('HTTP_CLIENT_IP');
        echo $ip
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ip = getenv('HTTP_X_FORWARDED_FOR');
        echo $ip
    else if(getenv('HTTP_X_FORWARDED'))
        $ip = getenv('HTTP_X_FORWARDED');
        echo $ip
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ip = getenv('HTTP_FORWARDED_FOR');
        echo $ip
    else if(getenv('HTTP_FORWARDED'))
       $ip = getenv('HTTP_FORWARDED');
       echo $ip
    else if(getenv('REMOTE_ADDR'))
        $ip = getenv('REMOTE_ADDR');
        echo $ip
    return $ip;}
    echo $get_client_ip;
?>
