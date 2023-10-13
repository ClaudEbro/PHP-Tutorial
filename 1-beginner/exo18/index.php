<?php ob_start();
$title = "Exo 18 : Method GET"; //Title of the training
?>

<!-- The code here -->

<form action="" method="GET">
    <div class="form-group">
        <label>Pseudo :</label>
        <input type="text" name = "pseudo" class="form-control">
    </div>
    <div class="form-group">
        <label>Age :</label>
        <input type="text" name = "age" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="Validate">
</form>

<?php
    if(
        isset($_GET['pseudo']) && !empty($_GET['pseudo']) &&
        isset($_GET['age']) && !empty($_GET['age'])
    ) {
        echo $_GET["pseudo"]. " is ".$_GET['age']." .";
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
