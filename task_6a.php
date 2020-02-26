<?php
    $a = 'семь';
    $b = 'четыре';

    switch ($a){
        case 'ноль': $aN = 0; break;
        case 'один': $aN = 1; break;
        case 'два': $aN = 2; break;
        case 'три': $aN = 3; break;
        case 'четыре': $aN = 4; break;
        case 'пять': $aN = 5; break;
        case 'шесть': $aN = 6; break;
        case 'семь': $aN = 7; break;
        case 'восемь': $aN = 8; break;
        case 'девять': $aN = 9; break;
        default: echo "Ошибка считывания a"; die;
    }

    switch ($b){
        case 'ноль': $bN = 0; break;
        case 'один': $bN = 1; break;
        case 'два': $bN = 2; break;
        case 'три': $bN = 3; break;
        case 'четыре': $bN = 4; break;
        case 'пять': $bN = 5; break;
        case 'шесть': $bN = 6; break;
        case 'семь': $bN = 7; break;
        case 'восемь': $bN = 8; break;
        case 'девять': $bN = 9; break;
        default: echo "Ошибка считывания b"; die;
    }

    $cN = $aN + $bN;
    echo $cN. "</br>";
    if($cN > 10){
        echo 'Большое число';
    }else{
        echo 'Маленькое число';
    }
?>