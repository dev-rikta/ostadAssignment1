<?php
    $temperature  = 10;
    $conversionType = 'Celsius to Fahrenheit';
    if($conversionType == 'Celsius to Fahrenheit'){
        $celsiusToFahrenheit =  ($temperature * 9/5) + 32;
        echo"Celsius to Fahrenheit: $celsiusToFahrenheit";
    }elseif($conversionType == 'Fahrenheit to Celsius'){
     $fahrenheitToCelsius = ($temperature - 32) * 5/9;
      echo"Fahrenheit to Celsius: $fahrenheitToCelsius";
    }else{
        echo "Invalid conversion type specified.";
    }
?>