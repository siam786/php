<?php 

$string = "Quic brown Brown fox under the lazy dog";
$replaceString = str_ireplace(array('brown','fox','quic'),array('green','hen','hurry'),$string,$count);
echo $replaceString;
echo PHP_EOL;
echo "Total replcement count {$count}";