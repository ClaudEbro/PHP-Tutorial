<?php ob_start(); //DO NOT MODIFY 
$title = "Exo 13 : Array and functions"; //Put the title of the page that you want.
?>

<!-- Put your code here -->
<?php

$raphaRating = [12,10,15,20,9,10];
$mikeRating = [15,8,20,16,7,18];
$gabiRating = [11,18,12,16,10,15];
$paulRating = [10,12,18,13,9,20];

function calculateaverage($tab){

    $result = 0;

    for($i=0; $i < count($tab); $i++){
        $result += $tab[$i];
    }
    return ($result/count($tab));
}

echo "The average of Raphaël is <b>".calculateaverage($raphaRating)."</b> <br/>";
echo "The average of Michaël is <b>".calculateaverage($mikeRating)."</b> <br/>";
echo "The average of Gabriel is <b>".calculateaverage($gabiRating)."</b> <br/>";
echo "The average of Paul is <b>".calculateaverage($paulRating)."</b> <br/>";

?>   

<?php
/************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
