<?php

$person = array('fname' => 'Hello', "lname" => 'world');
$newperson=$person;//copy by value & copy by referance (&)
$newperson['lname']='Pluto';
print_r($newperson);
print_r($person);

function ps($person){
    $person ['fname'] .= "changed";
    print_r($person);
}
ps($person);
print_r($person);