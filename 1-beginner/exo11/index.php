<?php ob_start(); //DO NOT MODIFY 
$title = "Exo 11 : Array"; //Put the title of the page that you want.
?>

<!-- Put your code here -->
<?php

$men = ["Michael","Peter","Marc","John"];


for($i=0; $i < count($men); $i++){
    echo"$i : $men[$i] <br />";  // echo $i. " : " .$men[$i]. '<br/>';
}

echo"------------------------------<br/>";

$womens = [];
$womens[] = "Mary";
$womens[] = "Morgan";
$womens[] = "Raphaella";
$womens[] = "Gabriella";
foreach($womens as $index => $women){
    echo $index. " : " .$women. '<br/>';
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
