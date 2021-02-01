<?php 

$fruits = array('a'=>'mango','b'=>'banana','c'=>'lemon','d'=>'watermelon');
$key = array_rand($fruits);
echo $key;
echo $fruits[$key];

print_r($fruits);