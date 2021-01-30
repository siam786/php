<?php

for($i = 0; $i < 100; $i++){
    // echo $i % 7 == 0 ? $i. "\n": '';
    // echo $i % 11 == 0 ? $i. "\n":'';
}

for ($i = 0, $j = 0; $i<100; $i +=7, $j += 11){
    echo "I valu is:".$i. "\n";
    echo "J value is:".$j. "\n";
}