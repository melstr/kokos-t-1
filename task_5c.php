<?php
$pass1 = 436;
$pass2Se = 234;

if($pass1 / 10 % 10 > 5){
    $pass2 = ($pass2Se % 10) * 100 + (intdiv($pass2Se, 10) % 10) * 10 + intdiv($pass2Se, 100);
    echo $pass2;
    echo "</br> Число сформировано: \"цифра первого разряда из \$pass2Se\" . \"цифра второго разряда из \$pass2Se\" . \"цифра третьего разряда из \$pass2Se\"";
}else{
    $pass2 = (intdiv($pass2Se, 10) % 10) * 100 + intdiv($pass2Se, 100) * 10 + ($pass2Se % 10);
    echo $pass2;
    echo "</br> Число сформировано: \"цифра второго разряда из \$pass2Se\" . \"цифра третьего разряда из \$pass2Se\" . \"цифра первого разряда из \$pass2Se\"";
}
?>