<?php

// $name="Earth"; //global scope

// function doSm(){
//    // global $name;
//     echo $GLOBALS['name'];
// }

// doSm();


/* function text()
{
    global $name;
    $name = "earth";
    //echo $name;
}

text();
echo $name; */

function doSomething()
{   
    static $i; //static scope
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}

function doExtra(){
    static $i;
    $i=$i?? 0;
    $i++;
    echo $i;
    echo "\n";
    
}
doSomething();
doSomething();
doSomething();
doSomething();
doExtra();
doSomething();
doExtra();
doExtra();
doExtra();