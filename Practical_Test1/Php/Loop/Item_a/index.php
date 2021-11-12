<?php

function WhileLoopTotal() {

    //Initialize the variables to 0 to define it as a number.
    //Variable $total refers where the total of all even number in the loop.
    //Variable $index refers to the number being added in the loop.
    
    $index = 0;
    $total = 0;

    //While the Numbers in the loop are still lesser than 10 or if its equal to 10 the loop will continue to function.
    while($index <= 10){

        //An even number is determnine through checking if divisible by 2 or when divided by 2 it will not have a remainder.
        if($index % 2 == 0){

            //The total will now be determined through each index.
            $total+=$index;
            
        }

        $index++;
    }
    
    //Display the values from the While Loop
    echo $total;
}

WhileLoopTotal();

?>