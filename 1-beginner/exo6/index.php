<?php ob_start(); //DO NOT MODIFY 
$title = "Exo 6 : The iteration for"; //Put the title of the page that you want.
?>

<!-- Put your code here -->
<?php

$random=random_int(5,15);

echo "<h2>Here is the total of $random first numbers (reverse) </h2> <br/>";

$result = 0;

for($i=$random; $i>=1; $i--){
    
    $result += $i;
    echo "Step : ".($random-$i+1). "- Result = ".$result."<br/>";
     
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
