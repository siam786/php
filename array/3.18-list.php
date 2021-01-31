<?php

$color = array(122, 233, 65);
// $red = $color[0];
// $green = $color[1];
// $blue = $color[2];

list($red, $green, $blue) = $color;

echo $green."\n";



$student = array('shohrab','hossain','email','tangail','dhaka');

list($fname,$lname,$mname,$location,$oldlocation) = $student;

echo $lname."\n";
echo "My name is {$fname} location is {$oldlocation}'\n'";

var_dump($fname,$lname,$mname,$location,$oldlocation);