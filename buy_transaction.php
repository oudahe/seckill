<?php

$url = 'http://127.0.0.1/Seckill/index.php?app=app&c=seckill&a=addQsec&gid=2&type=transaction';
$result = file_get_contents($url);

var_dump($result);
