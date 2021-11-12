<?php
//Declare array in a variable.
$color = array('red', 'blue', 'black', 'red', 'blue', 'blue', 'red', 'gold'); 
//Count the recurrence of each values
$recurrence = array_count_values($color);

//Initialize all the placeholders for the foreach loop.
$recurrence_value = 0;
$no_recurrent = [];
$print = []; 
//Get t he key and value pair.
foreach($recurrence as $name => $value){
    //Get the one that has no repetition in the array
    if($value == 1){
        $recurrence_value = $value;
        $no_recurrent = array($name);
        array_push($print, $name);
    }
    
}
//Sort in an ascending order.
asort($print);

foreach($print as $recurrent){
    //Print the values.
    echo $recurrent. "<br>";

}


?>