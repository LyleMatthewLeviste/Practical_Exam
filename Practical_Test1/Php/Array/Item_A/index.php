<?php

//Declare array in a variable.
$names = array('Marvin', 'Marco', 'Marvin', 'Marco', 'Marco', 'Marvin', 'Christian'); 
//Count the prevalence of each array value 
$prevalence = array_count_values($names);

//Initialize all the placeholders for the foreach loop.
$prevalence_value = 0;
$most_prevalent = [];
$print = []; 



//Get the key & value pair of the arrays.
foreach($prevalence as $name => $value){

    if($value >= $prevalence_value){
        //Instantiate the value to the variable prevalence_value.
        $prevalence_value = $value;
        //Set the keys to an array.
        $most_prevalent = array($name);
        //Push all the key to an array to get the certain array keys needed.
        array_push($print, $name);
    }
    
}
//Sort the Array to ascending order.
asort($print);

foreach($print as $prevalent){
    //Print the Values.
    echo $prevalent. "<br>";

}


?>