<!DOCTYPE html>
<html>
<body>
<!-- Input Value -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
IsPalindrome: <input type="text" name="ispalindrome"><br>
<input type="submit">
</form>


<?php
//Get the value input in the text.
if(isset($_POST['ispalindrome'])) {

    $palindrome = $_POST['ispalindrome'];

    function Palindrome_Review($revword){
    //Remove space.
    $word = str_replace(' ', '', $revword);
    //Get the word length of the inputted value.
    $word_length = strlen($word);


    for($i = 0; $i < $word_length ; $i++){
        //If the word substring is not equal to the reverse substring then will return false.
        if ($word[$i] != $word[$word_length - $i - 1]){
            return false;
        }
                
    }

    return true;
}

//Determine if the inputted value is a palindrome.
if(Palindrome_Review($palindrome)){
    echo $palindrome.' is a palindrome <br>';
} else {
    echo $palindrome.' is not a palindrome <br>';
}


}

?>


</body>
</html>

