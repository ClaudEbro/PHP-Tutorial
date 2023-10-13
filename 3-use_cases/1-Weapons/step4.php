<?php ob_start();
$title = "Step 4 : OOP";
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
 * In This third step, we are going to do the previous step in OOP.
 * All properties must be in public. 
 **************************************************************************************************/
?>

<!-- The code here -->

<?php

    class Weapon{

        public $name;
        public $image;
        public $description;

        public function __construct($name, $image, $description){
            $this->name = $name;
            $this->image = $image;
            $this->description = $description;
        }
    }

    $weapon1 = new Weapon("Sword","sword/sword1.png","A sharp weapon");
    $weapon2 = new Weapon("Bow","bow/bow1.png","A ranged weapon");
    $weapon3 = new Weapon("Chopped","chopped/chopped1.png","A sharp weapon used to cut wood.");
    $weapon4 = new Weapon("Flail","flail/flail1.png","A blunt weapon from the Middle Ages.");
    
    $weapons = [$weapon1, $weapon2, $weapon3, $weapon4];

?> 

<div><b>Here are the weapons : </div></b>
<?php foreach($weapons as $weapon){ ?>
    <div class="row align-items-center">
        <div class="col-3 text-center">
            <img src="resources/<?= $weapon->image; ?>"/>
        </div>
        <div class="col-auto">
            <h2><?= $weapon->name; ?></h2>
            <p><?= $weapon->description; ?></p>
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
