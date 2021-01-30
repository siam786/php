<?php
for($i = 5; $i<10; $i+=1){
    //echo $i;
    echo PHP_EOL;
    for($j=0; $j<$i; $j++){
        echo "*";
    }
    
}
echo PHP_EOL;
$i=1;
while($i<8){
    $i++;
    echo $i.PHP_EOL;
}
echo PHP_EOL;

$i=5;
do{
    $i+=2;
    echo $i.PHP_EOL;
    
}
while($i<12);
echo PHP_EOL;
echo "Go To\n";
$i = 0;
a: $i++;
echo $i.PHP_EOL;
if($i<10) goto a;