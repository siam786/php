<?php

$foods = [
    'vegetables' => 'brijals, brocoli, lal shak',
    'drink' => 'milk, water, pepsi',
    'sports' => 'cricket, foobal, scoccer',
];

$foods['drink'].=",orange juice";
$foods['drink'].=",mango juice";
//echo $foods['drink'];

// foreach ($foods as $key => $value) {
//     echo $key . "=" . $value . "\n";
// }
$keys = array_keys($foods);
for ($i = 0; $i < count($keys); $i++) {
    $key = $keys[$i];
    echo $foods[$key] . "\n";
}