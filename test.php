<?php

$ip = '123.57.204.35';
$ip = '192.168.0.1';
$ip = '219.143.139.161';

$data = getIpInfo($ip);
echo "<pre>";
print_r($data);


function getIpInfo($ip,$method=0){
    if($method == 0){
        $funName = 'btreeSearch';
    }else{
        $funName = 'memorySearch';
    }
    require dirname(__FILE__) . '/Ip2Region.class.php';
    $ip2regionObj = new Ip2Region('./data/ip2region.db');

    $data   = $ip2regionObj->btreeSearch($ip);
    return $data;
}





?>
