<?php

$fruits = array('apple', 'orange', 'mango', 'lemon','banana','coconut');
$randomitems=array("a"=>12,"b"=>45,"c"=>70,"d"=>80,12=>78,"e"=>90,"f"=>100);
$somefruits = array_slice($randomitems, 3,3,true);
print_r($somefruits);

$randomdata=array_slice($randomitems,-5,1,true);
print_r($randomdata);