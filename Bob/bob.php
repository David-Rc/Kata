<?php
class Bob {


	function respondTo(string $string){

		$answer;
		$array = str_split($string);

		if(ctype_upper($string)){

			$answer = "Whoa, chill out!";

		}else if(end($array) == "?"){

			$answer = 'Sure.';

		}else if(trim($string) == ""){

			$answer = "Fine. Be that way!";

		}else{

			$answer = 'Whatever.';

		}

			return $answer;

	}

}
?>