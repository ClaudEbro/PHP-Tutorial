<?php ob_start();
$title = "Exo 19 : Method POST"; //Title of the training
?>

<!-- The code here -->

<form action="" method="POST">
    <div class="form-group">
        <label>Number :</label>
        <input type="text" name="number" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="Validate">
</form>

<?php
    if(isset($_POST['number']) && !empty($_POST['number'])){
        if($_POST['number'] % 2 == 0) {
            echo $_POST["number"]. " is an an even number.";
        }
        else {
            echo $_POST["number"]. " is an an odd number.";
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
