<?php
$numbers = array(3, 4, 5, 7, 2, 21, 12, 9,20);

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

$persons = array('sojun','siam','rahman','manki','sabbir','rana','rojina');

function filterBys($n){
  
    return $n[0]=='s';
}

$newpersons = array_filter($persons,'filterBys');

print_r($newpersons);

// $newarray = array_map('cube',$numbers);
$evenumbers = array_filter($numbers, 'even'); //calback function
$oddnumbers = array_filter($numbers, 'odd'); //calback function
print_r($evenumbers);
print_r($oddnumbers);