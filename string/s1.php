<?php

$name = 'siam';

echo "my name is {$name} \n dev";

$heredoc = <<<EOD
data 1 
now
 sds {$name}

EOD;

echo $heredoc;