<?php ob_start();
$title = "Exo 4 : Objects"; //Title of the training
?>

<!-- The code here -->

<?php
    
    class Animal {
        public $name;
        public $age;
        public $type;

        public function __construct($name, $age, $type){
            $this -> name = $name;
            $this -> age = $age;
            $this -> type = $type;
        }
    }

    $animal1 = new Animal("Dick", 2, "dog");
    $animal2 = new Animal("Mina", 3, "cat");
    $animal3 = new Animal("Poe", 4, "dog");
    $animal4 = new Animal("Milo", 5, "cat");

    $animals = [$animal1, $animal2, $animal3, $animal4];


    function dispalyAnimal(){

        global $animals;

        echo "---------------------------------- <br />";
        foreach($animals as $animal){
            echo "Name : " .$animal->name. "<br/>";
            echo "Age : " .$animal->age. "<br/>";
            echo "Type : " .$animal->type. "<br/>";
            echo "---------------------------------- <br />";
        }
    }
    

    function displayAnimalType($type){

        global $animals;

        echo "---------------------------------- <br />";
        foreach($animals as $animal){
            if($animal->type === $type) {
                echo "Name : " .$animal->name. "<br/>";
                echo "Age : " .$animal->age. "<br/>";
                echo "Type : " .$animal->type. "<br/>";
                echo "---------------------------------- <br />";
            }
        }
    }
    
?>  
    <div>
        <a href="?type=all" class="btn btn-primary">All</a>
        <a href="?type=dogs" class="btn btn-primary">Dogs</a>
        <a href="?type=cats" class="btn btn-primary">Cats</a>
    </div>

    <?php
        if(isset($_GET['type']) && !empty($_GET['type']) && $_GET['type'] && $_GET['type'] !== "all"){
            if($_GET['type'] === "dogs"){
                displayAnimalType("dog");
            } else if($_GET['type'] === "cats"){
                displayAnimalType("cat");
            }
        }else {
            dispalyAnimal();
        }
    ?>


<?php
/************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
