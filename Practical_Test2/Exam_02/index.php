<?php

    //Use the fopen to open / create the text file. And "w" serves as the mode of the file, which means the file is rewritable or can be editted.
    $text_file = fopen("hello_there.php", "w");

    //Add the text needed by the text file.
    $text = '<?php

    //This is a comment

    echo "This is a test page!";
    echo "Exam number two!";

    //This is the end of a comment
    ';

    //The Function fwrite will proccess to write the text to the text file.
    fwrite($text_file, $text);
    //This is to finish the file
    fclose($text_file);

?>