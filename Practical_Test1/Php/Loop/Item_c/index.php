<?php

function Fibonacci($fibonacci){

    // Generate the initial digits of the Fibonacci Method which is the 0 and 1.
    if($fibonacci == 0){

        return 0;

    } elseif($fibonacci == 1){

        return 1;

    } else {

        //The Formula for the Fibonacci Method is: Fn-1 + Fn-2, which n is the subcript and F is the number value.
        return (Fibonacci($fibonacci-1) + Fibonacci($fibonacci-2));

    }

}

//Display and get 10 numbers. 
$fibonacci = 10;

    for ($i = 0; $i < $fibonacci; $i++){   
        echo Fibonacci($i). '<br>'; 
    } 

?>