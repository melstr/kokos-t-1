<?php
$pass1 = 466;
$pass2 = 432;
//$pass2Se = 234;
//$pass2 = 324, <=5
//$pass2 = 432,  > 5

if(intdiv($pass1 ,10) % 10 > 5){
    $pass2Se = ($pass2 % 10) * 100 + (intdiv($pass2, 10) % 10) * 10 + intdiv($pass2, 100);
    echo $pass2Se;
}else{
    $pass2Se = (intdiv($pass2, 10) % 10) * 100 + intdiv($pass2, 100) * 10 + ($pass2 % 10);
    echo $pass2Se;
}
?>