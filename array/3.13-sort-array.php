<?php

$fruits = array('banana','Apple','c'=>'Mango','f'=>'jackfruts','Lemon','watermelon');
$numbers = array(11,2,3,4,5,6,77,88,90);
sort($fruits,SORT_STRING | SORT_FLAG_CASE);
sort($numbers,SORT_STRING);
print_r($fruits);
print_r($numbers);

// for($i=0;$i<count($numbers);$i++){
//     echo $numbers[$i]."\n";
// }

foreach($numbers as $number){
    echo $number."\n";
}