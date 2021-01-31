<?php

$fruits = array('mango', 'banana', 'lemon', 'carot', 'lyci', 'amra');

$newefruits = array('orange', 'jackfruits');
$somefruits = array_splice($fruits, 3, 2, $newefruits);
print_r($somefruits);
print_r($fruits);