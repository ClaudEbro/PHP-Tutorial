<?php ob_start(); //DO NOT MODIFY 
$title = "Exo 10 : Functions"; //Put the title of the page that you want.
?>

<!-- Put your code here -->
<?php

$myWord = "Pearson";
$myWordWithoutVowel = removeVowel($myWord);

echo "$myWord without vowels is $myWordWithoutVowel";

function removeVowel($word){
    $vowels = ["a","e","i","o","u","y"];
    $result = str_replace($vowels,"",$word);
    return $result;
}
?>   

<?php
/************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
