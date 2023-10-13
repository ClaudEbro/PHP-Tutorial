<?php ob_start(); //DO NOT MODIFY 
$title = "Exo 5 : The iteration for"; //Put the title of the page that you want.
?>

<!-- Put your code here -->
<?php

$random=random_int(1,10);

echo "<h2>This is the multiplication table of $random : </h2> <br/>";

for($i=1; $i<=10; $i++){
    echo "$random * $i = ".($random * $i)."<br/>"; 
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
