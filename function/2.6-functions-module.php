<?php

//recursive function

// function sum($i, $stepping = 2)
// {

//     if ($i >= 10) {
//         return;
//     }
//     echo $i . "\n";
//     $i += $stepping;
//     sum($i);
// }

function printNumber($counter, $end, $stepping=3)
{
    if ($counter > $end) {
        return;
    }

    echo $counter . "\n";
    $counter += $stepping;
    printNumber($counter, $end,$stepping);
}

printNumber(0,40,8);