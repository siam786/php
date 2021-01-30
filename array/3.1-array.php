<?php

$students = array(
    "rahim",
    "karim",
    "siam",
    123,
    "helal",
    "zakir",
    "sabbir"
);

//var_dump($students);
//echo count($students);
//echo $students[3];
$n=count($students);

for($i=0;$i<$n;$i++){
    echo $students[$i]."\n";
}

// for($i=$n-1;$i>=0;$i--){
//     echo $students[$i]."\n";
// }