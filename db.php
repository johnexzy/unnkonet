<?php
$err = '127.0.0.1:8900/www/views/carousel';
$uri = explode('/', $err);
echo $uri[0]."\n";
echo $uri[1]."\n";
echo $uri[2]."\n";
echo $uri[3]."\n";
$nowg = intval(date('G')); //Hour
echo $nowg;