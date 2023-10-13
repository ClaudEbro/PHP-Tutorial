<?php ob_start();
$title = "Step 2 : Arrays";
?>

<?php
/**************************************************************************************************
 * In This use case, we are going to realise a web page to display the weapons for a video game.
 * 
 * Every weapon has 5 images except the bow which has 2 images.
 * The drop-down list permits to change weapons' image. When changing pages, the data is retained 
 * You have to display the webpage with boostsrap. 
 **************************************************************************************************/

 /**************************************************************************************************
 * In This second step, we are going to put weapons in a tble and display them first in a PHP table, 
 * then with Loops (For and foreach iteration).
 **************************************************************************************************/
?>

<!-- The code here -->

<?php
    
    $weapon1 = "sword";
    $weapon2 = "bow";
    $weapon3 = "chopped";
    $weapon4 = "flail";

    $weapons = [$weapon1, $weapon2, $weapon3, $weapon4];

    echo "<div><b>Here are the weapons : </div></b>";
    echo "<p>";
        echo "Weapon 1 : ".$weapons[0]. "<br/>";
        echo "Weapon 2 : ".$weapons[1]. "<br/>";
        echo "Weapon 3 : ".$weapons[2]. "<br/>";
        echo "Weapon 4 : ".$weapons[3]. "<br/>";
    echo "</p>";


    //With a For Loop
    echo "<div><b>Display with For Loop : </div></b>";
    for($i=0; $i < count($weapons); $i++){
        echo "Weapon ".($i+1)." : ".$weapons[$i]. " <br/>";
    }

    //With a foreach Loop
    echo "<div><b>Display with foreach Loop : </div></b>";
    foreach($weapons as $key=>$weapon){
        echo "Weapon ".($key+1)." : ".$weapon. " <br/>";
    }
?> 


<?php
/*********************************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 * 
 *********************************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
