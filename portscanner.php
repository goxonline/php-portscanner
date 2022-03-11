#!/usr/bin/php
<?php
$ip = ip2long($argv['1']);
$to_ip = ip2long($argv['2']);
$port = $argv['3'];

$socket = socket_create(AF_INET , SOCK_STREAM , SOL_TCP);
for($from_ip = $ip; $ip <= $to_ip ; $ip++){
  echo '.';
  @$connection = socket_connect($socket , long2ip($ip) , $port);
  if($connection){
    echo "\n\r".long2ip($ip)." port $port OK\n\r";
    socket_close($socket);
    $socket = socket_create(AF_INET , SOCK_STREAM , SOL_TCP);
  }else{

  }
}
?>
