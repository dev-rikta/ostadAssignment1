<?php
    $number = 0;
    if($number > 0){
        $sign = 'positive';
    }elseif($number == 0){
         $sign = 'neutral';
    }else{
        $sign = 'negative';
    }
    
    if($number % 2 == 0){
        $parity = 'even';
    }
    else{
          $parity = 'odd';
    }
    if($number == 0){
        echo "The number $number is $sign and $parity";
    }else{
        echo"The number $number is $sign and $parity";
    }
?>