<?php
$filename = "C:\\laragon\\www\php\\file\\data.txt";
$fp = fopen($filename,'r');
while($line=fgets($fp)){
    
    echo $line;
}

rewind($fp);
while($line=fgets($fp)){
    echo $line;
}

fclose($fp);
echo PHP_EOL;
$data =file($filename);
echo $data[4];
print_r($data);
echo "\n";
$bdata =file_get_contents($filename);
echo $bdata;