<?php ob_start(); //DO NOT MODIFY 
$title = "Exo 8 : While"; //Put the title of the page that you want.
?>

<!-- Put your code here -->
<?php

$random = rand(1,20);
$i = 1;
while($random < 15) {
    echo "Essay $i : ".$random. " is too small (<15). <br />";
    $random = rand(1,20);
    $i++;  
}
echo "The number selected is bigger than 15.";  

?>   

<?php
/************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
