<?php
function isPangram($text)
{

    $arr = array();
    $sort = array();

    $alpha = range('a', 'z');
    $str = strtolower($text);
    $split = str_split($str);

    for($i = 0; $i <= count($split) -1; $i++){

        $input = $split[$i];

        if(preg_match_all("/^[a-z]+$/", $input) == 1) {
            array_push($arr, $input);
        }

    }
        
    for($x = 0; $x <= count($arr) - 1; $x++){

        $input2 = $arr[$x];
        if(array_search($input2, $sort) <= -1){

            array_push($sort, $input2);

        }

    }
    

    $compteur = 0;

    for($n = 0; $n <= count($sort) -1; $n++){

            $input = $sort[$n];

        for($t = 0; $t <= count($sort) -1; $t++){

            if($input === $alpha[$n]){
                $compteur++;
            }else{
                $compteur = $compteur;
            }
        }
            
    }

    if($compteur === count($alpha)){
        echo "ok !";
        return true;
    } else {
        echo "error !";
        return false;
    }
    
};

function test($expected, $result)
{
    if ($expected != $result) {
        echo '<p>error : Expected</p>';
        var_dump($expected);
        echo "<p>got</p>";
        var_dump($result);
    } else
        echo "<p>Ok</p>";
}
test(false, isPangram(' '));
test(true, isPangram('the quick brown fox jumps over the lazy dog'));
test(false, isPangram('a quick movement of the enemy will jeopardize five gunboats'));
test(false, isPangram('the quick brown fish jumps over the lazy dog'));
test(true, isPangram('the_quick_brown_fox_jumps_over_the_lazy_dog'));
test(true, isPangram('the 1 quick brown fox jumps over the 2 lazy dogs'));
test(false, isPangram('7h3 qu1ck brown fox jumps ov3r 7h3 lazy dog'));
test(true, isPangram('\Five quacking Zephyrs jolt my wax bed.\\'));
test(true, isPangram('Victor jagt zwölf Boxkämpfer quer über den großen Sylter Deich.'));