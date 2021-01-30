<?php

// for ($number = 2; $number < 10; $number++) {
//     if ($number == 3) {
//         echo PHP_EOL;
//         continue;
//     }
//     echo "The number is:{$number}.\n";

// }
for ($m = 2; $m < 10; $m++) {
    if ($m == 3 || $m ==5|| $m==7) {
        echo PHP_EOL;
        continue;
    }
    echo "The number is:{$m}.\n";
}