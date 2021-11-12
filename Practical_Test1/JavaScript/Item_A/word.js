
function phrase_fix(){
//Declare the words to be fix.
var phrase = 'TheQuickBrownFoxJumpsOverTheLazyDog';
//Declare placeholders
var placeHolder = '';
var char = '';
//Get all the substrings to be utilize in the fixing process.
for(i=0; i < phrase.length; i++){
    //Find the position of the characters to be fix.
    char = phrase.charAt(i);
    //Check if the substrings if its in uppercase, to be fix to lowercase.
    if(char == char.toUpperCase()){
        placeHolder = placeHolder + ' ';
        placeHolder = placeHolder + char.toLowerCase();
        
    } else {
        placeHolder = placeHolder + char;
    }
    
    //Remove spaces in each end of the string.
    placeHolder = placeHolder.trim();
    //Uppercase the Initial letter of the phrase.
    placeHolder = placeHolder.charAt(0).toUpperCase() + placeHolder.slice(1);

}

//Display result.
 return placeHolder;

}

//Retrieve to HTML view.
document.getElementById('phrase').innerHTML = phrase_fix();
