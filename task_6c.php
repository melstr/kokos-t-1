<?php
   $ip = "192.168.1.1";
   //$ip = 3232235777;



    if((is_string($ip)) && (strpos($ip,".") !== false)){
        $ip16 = 0;
        $pivot = 0;
        $exponent = 3;
        for($i = 0; $i< strlen($ip); $i++){
            if($ip[$i] == '.'){
                $val = substr($ip, $pivot, $i - $pivot);
                $ip16 += (int)$val*pow(256, $exponent);
                $pivot = $i + 1;
                $exponent--;
                continue;
            }else if($i == strlen($ip) - 1){
                $val = substr($ip, $pivot, $i - $pivot + 1);
                $ip16 +=(int)$val*pow(256, $exponent);
            }
        }
        echo $ip16;
    }else{
        $ip32 = "";
        for($i = 0; $i < 4; $i++){
            if($i == 0){
                $ip32 = $ip % 256;
            }else{
                $ip32 = $ip % 256 .".". $ip32;
            }

            $ip = intdiv($ip, 256);
        }
        echo $ip32;
    }

?>