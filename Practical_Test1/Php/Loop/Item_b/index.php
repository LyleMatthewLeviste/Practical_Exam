<?php

function Oddnumbers() {

    //Initialize the variable oddnumber to zero.
    $oddnumber = 0;

    do{
        //The loop will increment based from the given condition. 
        $oddnumber++;

        //The odd numbers are cannot be divisible by two.
        if($oddnumber % 2 != 0){
            echo $oddnumber."<br>";
        }
    //Get all the Odd numbers from numbers 0-10.
    } while ($oddnumber < 10);

}

//Display the values.
Oddnumbers();

?>