<?php
function isogram($string){

	$array = str_split($string);
	$x = 0;

	for($i = 0; $i <= count($array) - 1; $i++){

			$input = $array[$i];

		for($n = 0; $n <= count($array) -1; $n++){

			$compare = $array[$n];
			if($input === $compare){

				$x++;

			if($x >= 2){

				return "is not isogram";

			}

			}

		}

		$x = 0;
	}

	return 'is isogram';

}
?>