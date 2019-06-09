<?php
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    echo $useragent."<br />";
    $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
    echo $ip."<br />";
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    echo $ip."<br />";
    $json_data = array(
       'id'=>1,'name'=>'jackson','country'=>'usa','office'=>array('google','oracle')
    );
    echo json_encode($json_data);
?>
