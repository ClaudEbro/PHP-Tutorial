<?php ob_start();
$title = "Exo 6 : Static Properties"; //Title of the training
?>

<?php
/*******************************************************************************
 * Create a class to manage Houses (This class is an other file).
 * A House has an ID(automatically generated when you create an house), 
   a date of creation, number of bedroom and a surface.
 * You have to generate the ID by a static property for the last house created.
 * The properties of the class must be in private.
 * You have to display data in a table with booststrap. 
 *******************************************************************************/
?>

<!-- The code here -->

<?php
    require "house.class.php";

    $house1 = new House(2016,3,122);
    $house2 = new House(2018,5,200);
    $house3 = new House(2020,2,105);
    
    $houses = [$house1, $house2, $house3];

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date of Creation</th>
      <th scope="col">Rooms</th>
      <th scope="col">Surface</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($houses as $house) : ?>
        <tr>
            <td><?= $house->getId(); ?></td>
            <td><?= $house->getDateOfCreation(); ?></td>  
            <td><?= $house->getRoom(); ?></td>  
            <td><?= $house->getSurface(); ?></td>
        </tr>        
    <?php endforeach; ?>
  </tbody>
</table>

<?php
/*********************************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 * 
 *********************************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
