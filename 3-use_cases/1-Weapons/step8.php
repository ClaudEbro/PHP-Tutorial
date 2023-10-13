<?php

session_start(); //Start the session

//Generation session' variables

if(!isset($_SESSION['Sword'])) $_SESSION['Sword'] = 1;
if(!isset($_SESSION['Bow'])) $_SESSION['Bow'] = 1;
if(!isset($_SESSION['Chopped'])) $_SESSION['Chopped'] = 1;
if(!isset($_SESSION['Flail'])) $_SESSION['Flail'] = 1;

ob_start();

$title = "Step 8 : Finalize the web page with sessions";

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
 * In This eighth step, we are going to Add sessions to keep data when the page is reloaded.
 * And finalize the web page.
 **************************************************************************************************/
?>

<!-- The code here -->

<?php

    class Weapon {

        private $name;
        private $level;
        private $maxlevel;
        private $description;

        public function __construct($name, $description, $maxlevel){
            $this->name = $name;
            $this->level = 1;
            $this->maxlevel = $maxlevel;
            $this->description = $description;
        }

        public function __toString(){
            $txt = "";
            $txt .='<div class="row align-items-center">';
                $txt .='<div class="col-3 text-center">';
                    $txt .='<img src="resources/' .$this->getImageName().'"/>';
                $txt .='</div>';
                $txt .='<div class="col-1">';
                    $txt .='<form action="" method="GET">';
                        $txt .='<select onChange="submit()" name="level'.$this->name.'">';
                            for($i=1; $i <= $this->maxlevel; $i++){
                                $txt .="<option value='".$i."'";
                                $txt .= ($i === (int)$_SESSION[$this->name]) ? "selected" : "";
                                $txt .= ">".$i."<option>";
                            }
                        $txt .='</select>';
                    $txt .='</form>';
                $txt .='</div>';
                $txt .='<div class="col-auto">';
                    $txt .='<h2>'.$this->name. '</h2>';
                    $txt .='<p>' .$this->description. '</p>';
                $txt .='</div>';
            $txt .='</div>';
            return $txt;
        }

        public function getName(){return $this->name;}
        public function getLevel(){return $this->level;}
        public function getMaxLevel(){return $this->maxlevel;}
        public function getDescription(){return $this->description;}

        public function setName($name){$this->name = $name;}
        public function setLevel($level){$this->level = $level;}
        public function setMaxLevel($maxlevel){$this->maxlevel = $maxlevel;}
        public function setDescription($description){$this->description = $description;}


        public function getImageName(){
            $research = ["à","é","è","ç","ù"];
            $replace = ["a","e","e","c","u"];
            $nameWithoutAccent = str_replace($research, $replace, $this->name);
            return $nameWithoutAccent."/".$nameWithoutAccent.$this->level.".png"; 
    }

    

    }

    //Creation of weapons
    $weapon1 = new Weapon("Sword","A sharp weapon",5);
    $weapon2 = new Weapon("Bow","A ranged weapon",2);
    $weapon3 = new Weapon("Chopped","A sharp weapon used to cut wood.",5);
    $weapon4 = new Weapon("Flail","A blunt weapon from the Middle Ages.",5);
    
    $weapons = [$weapon1, $weapon2, $weapon3, $weapon4];


    //Test if the posted image, we modify it with its the corresponding image.
    if(isset($_GET['levelSword'])){
        $_SESSION['Sword'] = $_GET['levelSword'];
    }
    if(isset($_GET['levelBow'])){
        $_SESSION['Bow'] = $_GET['levelBow'];
    }
    if(isset($_GET['levelChopped'])){
        $_SESSION['Chopped'] = $_GET['levelChopped'];
    }
    if(isset($_GET['levelFlail'])){
        $_SESSION['Flail'] = $_GET['levelFlail'];
    }

    $weapon1->setLevel($_SESSION['Sword']);
    $weapon2->setLevel($_SESSION['Bow']);
    $weapon3->setLevel($_SESSION['Chopped']);
    $weapon4->setLevel($_SESSION['Flail']);

?> 

<div><b>Here are the weapons : </div></b>
<?php foreach($weapons as $weapon){ 
    echo $weapon;
} ?>


<?php
/*********************************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 *********************************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
