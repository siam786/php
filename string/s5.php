<?php
$name = "Hello world, wow How are you";
$part = explode(" ", $name);
print_r($part);

// $orginal = join(",", $part);
// echo $orginal;

$part2 = str_split($name);
print_r($part2);