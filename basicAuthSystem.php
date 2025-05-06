<?php
    // Set variables 
    $username = "admin";
    $password = "1234";
    // Input from user
    $inputUsername = 'Rikta';
    $inputPassword = '1234';
    
    if(($username == $inputUsername) && ($password == $inputPassword)){
        echo  "Login Successful";
    }else{
        echo"Invalid username or password";
    }
?>