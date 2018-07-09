<?php
function getIpAddress(){

$ipContent   = file_get_contents("http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=61.135.152.194");
$jsonData = explode("=",$ipContent);
$jsonAddress = substr($jsonData[1], 0, -1);
return $jsonAddress;
}
$ip_info=json_decode(getIpAddress());


print_r($ip_info);
exit;
?>