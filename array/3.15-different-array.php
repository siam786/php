<?php
$employee = array(1,4,5,6,7,8,9);

$colors =  array(11,4,7,2,21,12,9);


$common = array_intersect($employee,$colors);
print_r($common);
$dif = array_diff($colors,$employee);

print_r($dif);