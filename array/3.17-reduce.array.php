<?php

$numbers = array(3, 4, 5, 7, 2, 21, 12, 9, 20);

function sum($oldvalue, $newvalue)
{
    if ($newvalue % 2 == 0) {
        return $oldvalue + $newvalue;
    } 
    return $oldvalue;
}

$sum = array_reduce($numbers, 'sum'); //callback function

echo $sum;