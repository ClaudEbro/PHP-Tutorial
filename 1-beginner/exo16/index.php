<?php ob_start(); //DO NOT MODIFY 
$title = "Exo 16 : Associative Arrays in Array"; //Put the title of the page that you want.
?>

<!-- Put your code here -->
<?php
    $p1 = [
        "name" => "Michael",
        "age" => 30,
        "sex" => true
    ];

    $p2 = [
        "name" => "Mary",
        "age" => 25,
        "sex" => false
    ];

    $p3 = [
        "name" => "Raphael",
        "age" => 32,
        "sex" => true
    ];

    $p4 = [
        "name" => "Gabriella",
        "age" => 27,
        "sex" => false
    ];

    $players = [$p1, $p2, $p3, $p4];

    foreach($players as $player){
        echo displayPlayer($player);
        echo "--------------------------------<br/>";
    }

    function displayPlayer($player) {
        echo "Name : ".$player["name"]."<br/>";
        echo "Age : ".$player["age"]."<br/>";
        if($player["sex"]){
            echo "Sex : Men <br/>";
        } else {
            echo "Sex : Women <br/>";
        }
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
