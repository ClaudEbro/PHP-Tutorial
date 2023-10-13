<?php ob_start(); //DO NOT MODIFY  
$title = "Exo 2 : Variables and ternaries"; //Put the title of the page that you want.
?>

<!-- Put your code here -->
<?php
    $name = "Mary";
    $age = 30;
    $men = false;

    $name2 = "Peter";
    $age2 = 32;
    $men2 = true;

    echo "<p>";
    echo $name. " is " .$age. " years old ";
    echo (!$men) ? " and she is a women." : " and he is a men."; 
    echo "</p>";
?>
<p>
    <?= $name2 ?> is <?= $age2 ?> years old
    <?= (!$men2) ? " and she is a women." : " and he is a men." ?>
</p>

    


<?php
/************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
