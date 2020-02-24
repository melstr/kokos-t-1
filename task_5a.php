<?php
    for($i = 0; $i < 100; $i++){
        $computer = rand(0,1);

        if($computer == 1){
            echo 'Оптимист </br>';
        }else{
            echo 'Пессимист </br>';
        }
    }
?>