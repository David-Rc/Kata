<?php

function wordCount($word){
    $arr = array();
    $str = strtolower($word);
	$wordSplit = preg_split("/[\s,]+/", $str);
	$chaine = preg_replace('#[^A-Za-z0-9]+#', '', $wordSplit);
    

    for($i = 0; $i <= count($chaine) -1; $i++){
        $input = $chaine[$i];
        
        if($input != "") {

            array_push($arr, $input);
        }    
    }

    return array_count_values($arr);

}

?>