<!DOCTYPE html>
<html>
<body>
<!-- Input Values -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Date 1: <input type="date" name="date_1"><br>
Date 2: <input type="date" name="date_2"><br>
<input type="submit">
</form>


<?php
function date_difference($date_1, $date_2){
    //declare the retrieved dates in a variable and parse it to the correct date format.
    $date_one = DateTime::createFromFormat('Y-m-d', $date_1);
    $date_two = DateTime::createFromFormat('Y-m-d', $date_2);
    //Get subtracted dates.
    $date_difference = date_diff($date_two, $date_one);
    //Get correct date format prior in retrieving the values.
    return $date_difference->format("%y Year, %m Month, %d Day");

}

if(isset($_POST['date_1']) && isset($_POST['date_2'])) {
    //retrieve the inputted values from the form which are processed in the function.
    $date1 = $_POST['date_1'];
    $date2 = $_POST['date_2'];
    //Print all the result of the function.
    echo date_difference($date1, $date2);

}


?>


</body>
</html>

