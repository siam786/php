<?php
//1 divided by - 4 ?
//2 divided by - 100 ?
//3 divided by - 400 ?

$year = 2000;
if($year % 4 ==0 && $year % 100 ==0 && $year % 400 ==0){
    echo "{$year} is a leap year";
}
else if($year % 4 == 0 && $year % 100 == 0){
    echo "{$year} is not leap year";
}
else if($year %4 ==0){
    echo "{$year} is a leap year";
}

else{
    echo "{$year} is not a leap year";
}

echo "\n";
// if(true && true){
//     echo "wow";
// }
if( $year % 4 ==0 && ($year % 100==!0 || $year % 400==0)){
    echo "{$year} is a leap year";
}
else {
    echo "{$year} is not a leap year";
}