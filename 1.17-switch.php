<?php
$n = -12;
$r = $n%2;

switch(true){
    case ($r==0 && $n>0):
        echo "$n is a positive number";
        break;
    case ($r==1 && $n>0):
        echo "$n is a positive number";
        break;
    case ($r==0 && $n<0):
        echo "$n is a negative number";
        break;  
    case ($r==1 && $n<0):
        echo "$n is a negative number";
        break;
                
}  