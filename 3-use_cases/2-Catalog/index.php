<?php

ob_start();

$title = "Courses Catalog";

?>


<?php
/*******************************************************************************************************
 * In This use case, We create a product catalog to highlight the products we want to sell.
*To do this, we will create a database which will contain at least 2 tables:
-products (in this case: courses)
-product types(types)

*We will use a single file, a database containing the two mentioned tables and PDO to retrieve the data.
********************************************************************************************************/


?>

<!-- The code here -->

<?php

//Connection to database
$dsn = 'mysql:dbname=catalog;host=localhost';
$user = 'root';
$password = '';


try { 
        $pdo = new PDO($dsn, $user, $password);
}
catch(PDOException $e){
    echo 'Coonection failed :'.$e->getMessage();
}

//To have result in utf8
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
);


//Retrieve data from database
$req = "SELECT * FROM courses";
$stmt = $pdo->prepare($req);
$stmt->execute();
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

//To display data in an associative array
// echo "<pre>";
// print_r($courses);

    
?>
<div class="row no-gutters">
    <?php foreach($courses as $c) : ?>
        <div class="col-4">
            <div class="card m-2" style="">
            <img src="resources/<?= $c['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $c['wording'] ?></h5>
                <p class="card-text"><?= $c['description'] ?></p>

                <?php
                    $req2 = "SELECT wording FROM type WHERE idType = :idType";
                    $stmt = $pdo->prepare($req2);
                    $stmt->bindValue(":idType", $c['idType'], PDO::PARAM_INT);
                    $stmt->execute();
                    $typeTxt = $stmt->fetch(PDO::FETCH_ASSOC);

                ?>

                <span class="badge badge-primary"><?= $typeTxt['wording'] ?></span>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>


<?php
/*********************************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 *********************************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
