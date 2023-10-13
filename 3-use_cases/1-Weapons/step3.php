<?php ob_start();
$title = "Step 3 : Associative Arrays";
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
 * In This third step, we are going to put weapons in a associative array.
 * Every weapon has a name, an image and a description. 
 **************************************************************************************************/
?>

<!-- The code here -->

<?php
    
    $weapon1 = [
        "name" => "Sword",
        "image" => "sword/sword1.png",
        "description" => "A sharp weapon"
    ];
    
    $weapon2 = [
        "name" => "Bow",
        "image" => "bow/bow1.png",
        "description" => "A ranged weapon"
    ];

    $weapon3 = [
        "name" => "Chopped",
        "image" => "chopped/chopped1.png",
        "description" => "A sharp weapon used to cut wood"
    ];

    $weapon4 = [
        "name" => "Flail",
        "image" => "flail/flail1.png",
        "description" => "A blunt weapon from the Middle Ages."
    ];
    

    $weapons = [$weapon1, $weapon2, $weapon3, $weapon4];

?> 

<div><b>Here are the weapons : </div></b>
<?php foreach($weapons as $weapon){ ?>
    <div class="row align-items-center">
        <div class="col-3 text-center">
            <img src="resources/<?= $weapon['image']; ?>"/>
        </div>
        <div class="col-auto">
            <h2><?= $weapon['name']; ?></h2>
            <p><?= $weapon['description']; ?></p>
        </div>
    </div>
<?php } ?>


<?php
/*********************************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 * 
 *********************************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
