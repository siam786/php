<?php

$n = 100;
$m = 150;

// function greaterOrSmaller($n, $m)
// {
//     if ($n > $m) {
//         return 1;
//     } else if ($n == $m) {
//         return 0;
//     } else {
//         return -1;
//     }
// }

$result = $n<=>$m;

if ($result == 1) {
    echo "{$n} is greater than is {$m}";
} elseif ($result==0) {
    echo "{$n} is equal to {$m}";
} else if ($result== -1) {
    echo "{$n} is smaller than {$m}";
}