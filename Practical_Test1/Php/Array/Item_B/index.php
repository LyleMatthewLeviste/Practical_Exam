<?php

//Declare array in a variable.
$numbers = [9863, 7127, 2020, 80, 131, 55, 100];
//Initialize all the placeholders for the foreach loop.
$round_off = [];
$init = 0;    

foreach($numbers as $number){
    //When the values are odd round to the it to tenths.
    if($number % 2 != 0){
        $init = $number; 
        array_push($round_off, round($init, -1));
    } else {
        array_push($round_off, $init);
    }

}

//Sort the Array to ascending order.
asort($round_off);

foreach($round_off as $round){
    //Print the values.
    echo $round. "<br>";

}


?>