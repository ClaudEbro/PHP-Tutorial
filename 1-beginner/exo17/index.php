<?php ob_start(); //DO NOT MODIFY 
$title = "Exo 17 : Associative Arrays in Array"; //Put the title of the page that you want.
?>

<!-- Put your code here -->
<?php
    $p1 = [
        "name" => "Michael",
        "age" => 30,
        "sex" => true,
        "ratings" => [15, 12, 9, 20]
    ];

    $p2 = [
        "name" => "Mary",
        "age" => 25,
        "sex" => false,
        "ratings" => [12, 16, 10, 18]
    ];

    $p3 = [
        "name" => "Raphael",
        "age" => 32,
        "sex" => true,
        "ratings" => [14, 20, 10, 7]
    ];

    $p4 = [
        "name" => "Gabriella",
        "age" => 27,
        "sex" => false,
        "ratings" => [8, 9, 18, 20]
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

        $result = 0;
        foreach($player["ratings"] as $index => $rating){
            $result += $rating;
            echo "Rating : ".($index+1). " : " .$rating."<br/>";
        }
        echo "The average is : ". ($result/count($player["ratings"])). "<br/>";
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
