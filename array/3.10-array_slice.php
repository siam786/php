<?php

$fruits = array('apple', 'orange', 'mango', 'lemon','banana','coconut');

$somefruits = array_slice($fruits, 2,-2,true);
print_r($somefruits);