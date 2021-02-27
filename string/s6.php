<?php 
$string = "quicn brown Brown fox under the lazy dog dog";

//$textReplace='';
$textReplace = str_ireplace(array('brown','fox','dog'),array('yellow','hen','kutta'),$string,$count);
echo $textReplace;
echo PHP_EOL;
echo "Total Count Replacement:{$count}";