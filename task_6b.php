<?php
    $price = 1234567;
    $price *= 0.77;
    $rubles = intdiv($price, 100);
    $kopek = $rubles % 100;

    echo $rubles." рубл";
    if($rubles%10>=5 || $rubles%10 == 0){
        echo "ей ";
    }else if($rubles%10 > 1){
        echo "я ";
    }else{
        echo "ь ";
    }

    echo $kopek." копе";
    if($kopek%10>=5 || $kopek%10 == 0){
        echo "ек ";
    }else if($kopek%10 > 1){
        echo "йки ";
    }else{
        echo "йка ";
    }

    echo "</br>";
    echo $rubles.".".$kopek." руб. </br>";
?>