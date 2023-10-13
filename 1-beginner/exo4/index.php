<?php ob_start(); //DO NOT MODIFY 
$title = "Exo 4 : The tests"; //Put the title of the page that you want.
?>

<!-- Put your code here -->
<?php

$random1=random_int(1,100);
$random2=random_int(1,100);

echo 'Number 1 : <b>'.$random1.'</b><br />';
echo 'Number 2 : <b>'.$random2.'</b><br />';

$abs = abs($random1-$random2);

if($abs > 25 && $abs < 75) {
    echo "The abs of <b>$random1 - $random2</b> is between 25 and 75.<br />";
} else {
    echo "The abs of <b>$random1 - $random2</b> is not between 25 and 75.<br />";
}
    echo $abs;
?>

   

<?php
/************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
