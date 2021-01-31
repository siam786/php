<?Php

$fruits = array('mango', 'banana', 'lemon', 'carot', 'lyci', 'amra');



$newfruits = array_slice($fruits, 0, 3);
$newfruits2 = array_slice($fruits,5);
$addfruits = array_merge($newfruits,$newfruits2);
print_r($addfruits);