<?php
//0 1 1 2 3 5 8 13 21 
$veryold = 0;
$old = 1;
$new = 1;

for ($n = 0; $n < 10; $n++) {
    echo $veryold." ";
    $old = $new;
    $new = $old + $veryold;
    $veryold = $old;
}

?>

Initial value
v=0;
O=1;
N=1;

1st loop
V=1
O=1
N=1

2nd loop
V=1
O=1
N=2