<?php ob_start();
$title = "Exo 7 : Manipulate Two Classes"; //Title of the training
?>

<?php
/**************************************************************************************
 * Create two classes (Player and Weapon) in different files.
 * Weapon has an ID(automatically generated when you create an arm), 
   a name and a number of harm.
  Player contains a name, a power, some life point and an arm (only the associated id).
 * The properties of the classes must be in private.
 * You have to display data in the index file. 
 **************************************************************************************/
?>

<!-- The code here -->

<?php
    require "player.class.php";
    require "weapon.class.php";

    $weapon1 = new Weapon("Chopped",10);
    $weapon2 = new Weapon("Sword",8);
    echo $weapon1;

    echo"----------------------<br/>";

    $player1 = new Player();
    $player1->setName("SuperX");
    $player1->setIdWeapon($weapon1->getId());
    echo $player1;  

    echo"----------------------<br/>";

    $player2 = new Player();
    $player2->setName("Tor");
    $player2->setIdWeapon($weapon2->getId());
    echo $player2;
    

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
