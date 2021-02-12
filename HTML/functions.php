<?php //add functions here array

function isChecked($inputname,$value){
    if(isset($_REQUEST[$inputname]) && is_array($_REQUEST[$inputname]) && in_array($value,$_REQUEST[$inputname])){
        echo " checked ";
    }
}


function displayOptions($options,$selectedValues){
    foreach($options as $option){
        $option = strtolower($option);
        $selected ='';
        if(in_array($option,$selectedValues)){
            $selected="selected";
        }
        printf("<option value='%s' %s>%s</option>\n",$option,$selected,ucwords($option));
    }
    
}