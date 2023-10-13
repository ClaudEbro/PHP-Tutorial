<?php ob_start(); 
$title = "Exo 9 : Functions"; //Put the title of the page that you want.
?>

<!-- Put your code here -->
<?php

$a = 5;
$b = 122;

function mod($a){
    if($a %2 === 0){
        return true;
    }else {
        return false;
    }
}

echo "<div>";
    if(mod($a)){
        echo "The number $a is an even number.";
    } else {
        echo "The number $a is odd number.";
    }
echo "</div>";

echo "<div>";
    echo (mod($b))?"The number $b is an even number. ":" The number $b odd number.";
echo "</div>";
?>   

<?php
/************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
