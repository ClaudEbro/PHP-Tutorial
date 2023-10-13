<?php ob_start();
$title = "Exo 3 : Associative Arrays"; //Title of the training
?>

<!-- The code here -->

<?php
    
    $animal1 = [
        "name" => "DicK",
        "age" => 2,
        "type" => "dog"
    ];

    $animal2 = [
        "name" => "Mina",
        "age" => 3,
        "type" => "cat"
    ];

    $animal3 = [
        "name" => "Poe",
        "age" => 4,
        "type" => "dog"
    ];

    $animal4 = [
        "name" => "Milo",
        "age" => 5,
        "type" => "cat"
    ];

    $animals = [$animal1, $animal2, $animal3, $animal4];

    function dispalyAnimal(){

        global $animals;

        echo "---------------------------------- <br />";
        foreach($animals as $animal){
            foreach($animal as $key => $value){
                echo $key. " : " .$value. "<br/>";
            }
            echo "---------------------------------- <br />";
        }
    }
    

    function displayAnimalType($type){

        global $animals;

        echo "---------------------------------- <br />";
        foreach($animals as $animal){
            if($animal["type"] === $type) {
                foreach($animal as $key => $value){
                echo $key. " : " .$value. "<br/>";
            }
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
