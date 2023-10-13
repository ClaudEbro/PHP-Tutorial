<?php ob_start();
$title = "Step 6 : OOP - Managing images according to the level";
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
 * In This sixth step, we are going to remove the image property and add the property level
 * Ensure that the image is displayed according to the level of each weapon
 * You must also use the weapon name.
 * You must not make any changes to the weapon name or image names.
 * You need to create a function that will remove special characters from the name.
 **************************************************************************************************/
?>

<!-- The code here -->

<?php

    class Weapon{

        private $name;
        private $level;
        private $description;

        public function __construct($name, $description){
            $this->name = $name;
            $this->level = 2;
            $this->description = $description;
        }

        public function __toString(){
            $txt = "";
            $txt .='<div class="row align-items-center">';
                $txt .='<div class="col-3 text-center">';
                    $txt .='<img src="resources/' .$this->getImageName().'"/>';
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


        public function getImageName(){
            $research = ["à","é","è","ç","ù"];
            $replace = ["a","e","e","c","u"];
            $nameWithoutAccent = str_replace($research, $replace, $this->name);
            return $nameWithoutAccent."/".$nameWithoutAccent.$this->level.".png"; 
    }

    

    }


    $weapon1 = new Weapon("Sword","A sharp weapon");
    $weapon2 = new Weapon("Bow","A ranged weapon");
    $weapon3 = new Weapon("Chopped","A sharp weapon used to cut wood.");
    $weapon4 = new Weapon("Flail","A blunt weapon from the Middle Ages.");
    
    $weapons = [$weapon1, $weapon2, $weapon3, $weapon4];

    

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
