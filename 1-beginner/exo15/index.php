<?php ob_start(); //DO NOT MODIFY 
$title = "Exo 15 : Associative Arrays"; //Put the title of the page that you want.
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

    displayPlayer($p1);
    echo "--------------------------------<br/>";
    displayPlayer($p2);

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
