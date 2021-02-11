<?php //add functions here array

function isChecked($inputname,$value){
    if(isset($_REQUEST[$inputname]) && is_array($_REQUEST[$inputname]) && in_array($value,$_REQUEST[$inputname])){
        echo " checked ";
    }
}


function displayOptions($options){
    foreach($options as $option){
        printf("<option value='%s'>%s</option>\n",strtolower($option),ucwords($option));
    }
    
}