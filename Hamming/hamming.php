<?php

function distance($var1, $var2){

	$result;

	if(gettype($var1) != "string" || gettype($var2) != "string"){

		$result = "InvalidArgumentException";

	} else {

		$arr1 = str_split($var1);
		$arr2 = str_split($var2);

		if(count($arr1) == count($arr2)){

			$result = 0;

			for($i = 0; $i <= count($arr1) -1; $i++){

				$letter1 = $arr1[$i];
				$letter2 = $arr2[$i];

				if($letter1 != $letter2){

					$result++;

				}else{

					$result = $result;

				}

			}

		}else{

			$result = 'DNA strands must be of equal length.';

		}


	}

	return $result;

}


?>