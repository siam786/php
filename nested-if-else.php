<?php

$condition1 = true;
$condition2 = true;
$condition3 = false;

if($condition1 && $condition2 && $condition3){
    echo "Hello";
}
elseif($condition1 && $condition2){
    echo "not 1";
}
elseif($condition1){
    echo "no 2";
}
else{
    echo "no 3";
}