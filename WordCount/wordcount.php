<?php

$test = "olli olli the they them";
$test2 = "hello world of the world to the hello world !!!";


function wordCount($word){
    $arr = array();
	$wordSplit = explode(' ', $word);
	$chaine = preg_replace('#[^A-Za-z0-9]+#', '', $wordSplit);

    for($i = 0; $i <= count($chaine) -1; $i++){
        $input = $chaine[$i];
        
        if($input != ""){
            array_push($arr, $input);
        }
        
            
    }
	
    print_r(array_count_values($arr));

}

wordCount($test2);
wordCount($test);


?>