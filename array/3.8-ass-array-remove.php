<?php 

$student =array(
    'fname'=>'hello',
    'lname'=>'world'
);

print_r($student);
unset($student['lname']);
print_r($student);

?>