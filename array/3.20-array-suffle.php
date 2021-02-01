<?php

$numbers = range(0, 70);
$random = mt_rand(0, 70);

echo $numbers[$random] . "\n";

$lucyNumber = $numbers[$random];
if ($lucyNumber % 2 == 0) {
    echo "head";
} else {
    echo "Tail";
}