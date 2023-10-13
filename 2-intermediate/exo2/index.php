<?php ob_start();
$title = "Exo 2 : Arrays with function"; //Title of the training
?>

<!-- The code here -->

<?php
    require "manageArrays.php";
    $tab = [2,6,10,20,9,14];
    $tab2 = [4,8,2,26,18,14];

?>

<div class="row text-center">
    <div class="col">
        <h1>Array 1</h1>
        <?php
              displayArray($tab);
              echo "The average of this table is : " .calculateAverage($tab);
              echo "<br>";
              if(isEvenArray($tab)){
                  echo "The array contains only even values.";
              }
              else{
                  echo "The array doesn't contain only even values.";
              }
        ?>
    </div>

    <div class="col">
        <h1>Array 2</h1>
        <?php
              displayArray($tab2);
              echo "The average of this table is : " .calculateAverage($tab2);
              echo "<br>";
              if(isEvenArray($tab2)){
                  echo "The array contains only even values";
              }
              else{
                  echo "The array doesn't contain only even values";
              }
        ?>
    </div>
</div>



<?php
/************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
