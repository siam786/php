<?php
$filename = "C:\\laragon\\www\php\\file\\data.txt";
file_put_contents($filename,"cucu babu\n",LOCK_EX | FILE_APPEND);
file_put_contents($filename,"ami jackson\n",LOCK_EX | FILE_APPEND);