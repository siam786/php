<?php
$filename = "C:\\laragon\\www\php\\file\\data.txt";
$students = array(
    array(
        'fname' => 'shohrab',
        'lname' => 'hossain',
        'age' => 12,
        'class' => 7,
        'roll' => 11
    ),
    array(
        'fname' => 'shamim',
        'lname' => 'al-mamun',
        'age' => 13,
        'class' => 7,
        'roll' => 6
    ),
    array(
        'fname' => 'mamun',
        'lname' => 'asraf',
        'age' => 17,
        'class' => 7,
        'roll' => 1
    ),

);
$fp = fopen($filename, "w");
foreach ($students as $student) {
    fputcsv($fp, $student);
}
fclose($fp);
$student = array(
    'fname' => 'nasir',
    'lname' => 'kamal',
    'age' => 15,
    'class' => 8,
    'roll' => 3
);
$fp = fopen($filename, "a");
fputcsv($fp, $student);
fclose($fp);
$data = file($filename); //read function

print_r($data);
fclose($fp);