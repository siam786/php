<?php

$fruits = array('banana','Apple','c'=>'Mango','f'=>'jackfruts','Lemon','watermelon');
$numbers = array(11,2,3,4,5,6,77,88,90);

// if(in_array(80,$numbers)){
//     echo "55 is found";
// }
// else{    
//   echo  "not found";
// }

$offset = array_search(88,$numbers,true);
echo $offset;



?>