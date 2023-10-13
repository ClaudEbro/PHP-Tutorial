<?php ob_start(); //DO NOT MODIFY 
$title = "Exo 12 : Array and average"; //Put the title of the page that you want.
?>

<!-- Put your code here -->
<?php

$raphaRating = [12,10,15,20,9,10];
$michaelRating = [15,8,20,16,7,18];

$result = 0;
for($i=0; $i < count($raphaRating); $i++){
    $result += $raphaRating[$i];
}

echo"The average of Mark is <b>".($result/count($raphaRating))."</b> <br/>";

$result = 0;
foreach($michaelRating as $rate){
    $result += $rate;
}
echo"The average of Michael is <b>".($result/count($michaelRating))."</b>";


?>   

<?php
/************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
