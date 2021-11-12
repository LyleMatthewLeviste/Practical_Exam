<!DOCTYPE html>
<html>
<body>
<!-- Input Values -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Reverse Word: <input type="text" name="reverse_word"><br>
<input type="submit">
</form>


<?php
function Reverse_Word($reverse_word){
    //Get the reverse word value and declare it to a variable.
    $reverse = strrev($reverse_word);

    return $reverse;

   
}

if(isset($_POST['reverse_word'])) {
    //retrieve the inputted value from the form which are processed in the function.
    $word = $_POST['reverse_word'];
    //Print all the result of the function.
    echo Reverse_Word($word);

}


?>


</body>
</html>

