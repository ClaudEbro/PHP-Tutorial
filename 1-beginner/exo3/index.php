<?php ob_start(); //DO NOT MODIFY 
$title = "Exo 3 : The tests"; //Put the title of the page that you want.
?>

<!-- Put your code here -->
<?php

$random=rand(1,20);
echo "<h2>The number is ".$random.". <br /></h2>";

if($random <=5){
    echo "The number is between 1 and 5.";
} else if ($random <= 10)
    echo "The number is between 6 and 10.";
else if($random <= 15)
    echo "The number is between 11 and 15.";
else
    echo "The number is between 16 and 20.";
?>

   

<?php
/************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
