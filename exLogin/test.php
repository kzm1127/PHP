<?php

$userin=fopen("user.csv","a");
$uin="user2";
$pin="0000";
$c=",";
$r=$uin.$c.$pin."\n";
fwrite($userin,$r);
fclose($userin);
