<?php

$students = array("helal", "siam", "sabbir");


array_push($students, "zakir");
array_unshift($students, "shamim");
array_pop($students);
array_shift($students);
array_push($students, "jahid");
array_unshift($students, "shamim");
array_shift($students);
array_pop($students);
array_pop($students);
array_pop($students);
array_unshift($students,"siam");
print_r($students);


$number = count($students);

for ($i =0; $i < $number; $i++) 
{ 
    echo $students[$i] . "\n" ; 
}

// print_r($students);