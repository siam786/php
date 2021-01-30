<?php
$n = 100;
$r = $n % 2;
switch ($r){
    case 0:
        echo "{$n} is a even number \n";
        break;
    default:
        echo "{$n} is a odd number \n";
}

$color = 'red';
switch($color){
    case 'red':
          echo ucwords($color). " is our favorite color";    
          break;
    case 'green':
          echo "green is our dream color";
          break;
    default:
        echo "color do't macth";       
    
   
}