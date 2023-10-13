<?php

ob_start();

$title = "My Animals";

?>


<?php
/*******************************************************************************************************
 * In This use case, From the database, we will create a web page (index.php) which will list the animals contained therein.

We will achieve:
- the Animal class which allows you to create and manage an animal (private attributes, constructor, getter, etc.);

- the AnimalDAO class which allows you to retrieve data from the database;

- the PDO class allowing you to create a PDO instance to connect the database to PHP;

- the index.php file which allows you to link all these files;

*We will use a single file, a database containing the two mentioned tables and PDO to retrieve the data;
********************************************************************************************************/

 
?>

<!-- The code here -->

<?php

//Connection to database
require "MyPDO.class.php";
require "Animal.class.php";
require "AnimalDAO.class.php";

//To get all animals from the database like a Controller
$animals = AnimalDAO::getAnimalsDB();
foreach($animals as $animal){
    $type = AnimalDAO::getAnimalType($animal['idAnimal']);
    $images = AnimalDAO::getAnimalImage($animal['idAnimal']);
    new Animal($animal['idAnimal'], $animal['nom'], (int)$animal['age'], (int)$animal['sexe'], $type, $images);
}

?>
<?php 
    //Display data like a View
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Sex</th>
      <th scope="col">Type</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach(Animal::$myanimals as $animal){ ?>
        <tr>
            <td style="vertical-align:middle"><?= $animal->getId() ?></td>
            <td style="vertical-align:middle"><?= $animal->getName() ?></td>
            <td style="vertical-align:middle"><?= $animal->getAge() ?></td>
            <td style="vertical-align:middle"><?= ($animal->getSex() === 0) ? "Female" : "Male"; ?></td>
            <td style="vertical-align:middle"><?= $animal->getType() ?></td>
            <td style="width:200px;" class="text-center">
                <?php foreach($animal->getImages() as $image) : ?>
                    <img src="resources/<?=$image['url'] ?>" alt="<?= $image['libelle'] ?>" style="max-height:150px;" class="img-thumbnail img-fluid"/>
                <?php endforeach; ?>
            </td>
        </tr>
    <?php } ?>
  </tbody>
</table>


<?php
/*********************************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 *********************************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
