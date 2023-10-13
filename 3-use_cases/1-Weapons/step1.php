<?php ob_start();
$title = "Step 1 : Variables";
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
 * In This first step, we are going to realise realise a drop-down list of weapons
 **************************************************************************************************/
?>

<!-- The code here -->

<?php
    
    $weapon1 = "sword";
    $weapon2 = "bow";
    $weapon3 = "chopped";
    $weapon4 = "flail";

    echo "<div><b>Here are the weapons : </div></b>";
    echo "<p>";
        echo "Weapon 1 : ".$weapon1. "<br/>";
        echo "Weapon 2 : ".$weapon2. "<br/>";
        echo "Weapon 3 : ".$weapon3. "<br/>";
        echo "Weapon 4 : ".$weapon4. "<br/>";
    echo "</p>";
?> 

<div>
    <b>Here are the weapons :</b>
</div>
<select>
    <option></option>
    <option><?= $weapon1; ?></option>
    <option><?= $weapon2; ?></option>
    <option><?= $weapon3; ?></option>
    <option><?= $weapon4; ?></option>
</select>

<?php
/*********************************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 * 
 *********************************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
