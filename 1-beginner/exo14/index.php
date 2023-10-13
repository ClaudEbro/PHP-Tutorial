<?php ob_start(); //DO NOT MODIFY 
$title = "Exo 14 : Arrays in Array"; //Put the title of the page that you want.
?>

<!-- Put your code here -->
<?php

$raphaRating = [12,10,15,20,9,10];
$mikeRating = [15,8,20,16,7,18];
$gabiRating = [11,18,12,16,10,15];
$paulRating = [10,12,18,13,9,20];

$studentRates = [$raphaRating, $mikeRating, $gabiRating, $paulRating];

function calculateaverage($ratings){

    $result = 0;

    foreach($ratings as $rating){
        $result += $rating;
    }
    return ($result/count($ratings));
}

foreach($studentRates as $index=> $ratings){
    echo "The average of student number  $index is <b>" .calculateaverage($ratings)."</b> <br/>";
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
