<?php
    $a = 3;
    $b = 7;
    $c = 8;
    $d = 4;
    $h = 3;
    $Why = false;

    if($Why){
        $S = 0.5 * ($a + $b)* $h;
        echo "Площадь трапеции = ". $S;
    }else{
        $P = $a + $b + $c + $d;
        echo "Периметр трапеции = ". $P;
    }

?>
