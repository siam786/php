<?php
<<<<<<< HEAD
$student = array(
    'fname' => 'jamal',
    'lname' => 'ahmed',
    'section' => 'c',
    'class' => 9
);
// $jasondatas= json_encode($student);
// echo $jasondatas;
// print_r($student);

 printf("%s %s\n",$student['fname'],$student['section']);
// print_r($student);
// $student2 = json_decode($jasondatas);
// print_r($student2,true); 

// echo "\n";
$new = serialize($student);
echo $new . "\n";
$unse = unserialize($new);
print_r($unse);
$jasondatas = json_encode($student);
echo $jasondatas;
PHP_EOL;
$jasindecode = json_decode($jasondatas,true);
print_r($jasindecode); 
=======
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
>>>>>>> e6069ac719b6035f7c87000e8bf4e4ca8b0c4bcb
