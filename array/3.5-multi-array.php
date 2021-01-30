<?php

$bazar= [
    'fish'=>explode(',','elish,rui,puti,sing'),
    'vegtables'=>explode(',','cim,alu,tomato,shak,gajor'),
    'mosla'=>explode(',','gorom-mosla,jira,darcini,long')
];

// array_unshift($bazar['fish']);
// print_r($bazar);
//echo $bazar['fish'][2];
$sample=[
    [1,2,3],
    [11,22,33,44],
    [111,222,333,444,[5,4]]
];

echo $sample[1][3];

?>