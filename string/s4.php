<?php
$string = "hello world siam";
// $stlenth = strlen($string)-1;
// for($i=$stlenth;$i>=0;$i--){
//     echo $string[$i];
// }

echo PHP_EOL;

$part= substr($string,0,6);
echo strrev($part);
echo PHP_EOL;
echo strrev($string);