<?php
$student =array(
    'fname'=>'jamal',
    'lname'=>'ahmed',
    'section'=>'c',
    'class'=>9
);
$jasondatas= json_encode($student);
echo $jasondatas;
print_r($student);

printf("%s %s\n",$student['fname'],$student['lname']);

?>