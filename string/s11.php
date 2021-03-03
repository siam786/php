<?php
$string ="shohrab hossain 01742080475 shohrab.hossain36@gmail.com";

$parts =sscanf($string,"%s %s %11s %s");
print_r($parts);
sscanf($string,"%s %s %11s %s",$fname,$lname,$mobile,$email);
echo "My name is {$fname} & last name {$lname} also have mobile no:{$mobile} & email no:{$email}";