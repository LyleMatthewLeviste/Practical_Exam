<?php

function Fibonacci($fibonacci){

    //Declare the formulas in a variable.
    $answer = (5 * ($fibonacci * $fibonacci) + 4);
    $answer2 = (5 * ($fibonacci * $fibonacci) - 4);

    //Check if the value is a perfect square.
    if(sqrt($answer) == floor(sqrt($answer)) || sqrt($answer2) == floor(sqrt($answer2))){

        return true;

    } 

    
    return false;

}
//Get 10 values and determine if the values are fibonacci number.
$fibonacci = 10;

    for ($i = 1; $i <= $fibonacci; $i++){   
        if(Fibonacci($i)){
            //Print all the Fibonacci Numbers.
            echo $i.' is a Fibonnacci Number <br>';
        } else {
            //Print all the not Fibonacci Numbers.
            echo $i.' is not a Fibonnacci Number <br>';
        } 
    } 



?>