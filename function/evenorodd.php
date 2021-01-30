<?php
include('encapsulation.php');

$x = 10;

if (isEven($x)) { //argument
    echo "{$x} is an even number";
} else {
    echo "{$x} is an odd number";
}