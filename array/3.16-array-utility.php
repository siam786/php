<?php
$numbers = array(3, 4, 5, 7, 2, 21, 12, 9);

function square($n)
{
    printf("Square of %d is %d \n", $n, $n * $n);
}
array_walk($numbers, 'square');

function cube($n)
{
    return $n * $n * $n;
}

function even($n)
{
    return $n % 2 == 0;
}

function odd($n)
{
    return $n  % 2 == 1;
}



// $newarray = array_map('cube',$numbers);
$newarray = array_filter($numbers, 'odd'); //calback function
print_r($newarray);