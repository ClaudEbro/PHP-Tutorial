<?php ob_start();
$title = "Step 5 : OOP";
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
 * In This fifth step, we are going to improve the previous step by changing all properties in 
 * private and adding the function toString.
 * And we are displaying a random imge for each weapon.
 **************************************************************************************************/
?>

<!-- The code here -->

<?php

    class Weapon{

        private $name;
        private $image;
        private $description;

        public function __construct($name, $image, $description){
            $this->name = $name;
            $this->image = $image;
            $this->description = $description;
        }

        public function __toString(){
            $txt = "";
            $txt .='<div class="row align-items-center">';
                $txt .='<div class="col-3 text-center">';
                    $txt .='<img src="resources/' .$this->image.'"/>';
                $txt .='</div>';
                $txt .='<div class="col-auto">';
                    $txt .='<h2>'.$this->name. '</h2>';
                    $txt .='<p>' .$this->description. '</p>';
                $txt .='</div>';
            $txt .='</div>';
            return $txt;
        }

        public function getName(){return $this->name;}
        public function getImage(){return $this->image;}
        public function getDescription(){return $this->description;}

        public function setName($name){$this->name = $name;}
        public function setImage($image){$this->image = $image;}
        public function setDescription($description){$this->description = $description;}
    }


    $weapon1 = new Weapon("Sword","sword/sword1.png","A sharp weapon");
    $weapon2 = new Weapon("Bow","bow/bow1.png","A ranged weapon");
    $weapon3 = new Weapon("Chopped","chopped/chopped1.png","A sharp weapon used to cut wood.");
    $weapon4 = new Weapon("Flail","flail/flail1.png","A blunt weapon from the Middle Ages.");
    
    $weapons = [$weapon1, $weapon2, $weapon3, $weapon4];

    $randomWeapon =rand(1,5);
    $weapon1->setImage("sword/sword".$randomWeapon.".png");
    
    $randomWeapon =rand(1,2);
    $weapon2->setImage("bow/bow".$randomWeapon.".png");

    $randomWeapon =rand(1,5);
    $weapon3->setImage("chopped/chopped".$randomWeapon.".png");

    $randomWeapon =rand(1,5);
    $weapon4->setImage("flail/flail".$randomWeapon.".png");

?> 

<div><b>Here are the weapons : </div></b>
<?php foreach($weapons as $weapon){ 
    echo $weapon;
} ?>


<?php
/*********************************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 * 
 *********************************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
