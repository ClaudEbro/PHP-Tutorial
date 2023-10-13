<?php ob_start(); //DO NOT MODIFY 
$title = "Exo 1 : Variables"; //Put the title of the page that you want.
?>

<!-- Put your code here -->
<?php
    $a=3;
    $b=5;
    $c=7;

    echo "<p>";
        echo "************************** Berfore Permutation *******************<br />";
        echo "A : " .$a ."<br />";
        echo "B : " .$b ."<br />";
        echo "C : " .$c ."<br />";
    echo "</p>";

    $temp = $a;
    $a=$b;
    $b=$c;
    $c=$temp;

    echo "<p>";
        echo "************************** After Permutation *******************<br />";
        echo "A : " .$a ."<br />";
        echo "B : " .$b ."<br />";
        echo "C : " .$c ."<br />";
    echo "</p>";

 
?>


<?php
/************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
