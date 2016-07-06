<?php
function toRNA($var){

	$array = str_split($var);
	$output = "";

	for($i = 0; $i <= count($array) -1; $i++){

		$letter = $array[$i];

		switch($letter){
			case "C":
				$input = "G";
				$output .= $input;
				break;
			case "G":
				$input = "C";
				$output .= $input;
				break;
			case "T":
				$input = "A";
				$output .= $input;
				break;
			case "A":
				$input = "U";
				$output .= $input;
				break;
		}


	}
		

		return $output;

}
?>