<?php ob_start();
$title = "Exo 20 : Forms and Array"; //Title of the training
?>

<!-- The code here -->

<form action="" method="POST">
    <div class="form-group">
        <label>Rating 1 :</label>
        <input type="text" name="rating1" class="form-control">
    </div>
    <div class="form-group">
        <label>Rating 2 :</label>
        <input type="text" name="rating2" class="form-control">
    </div>
    <div class="form-group">
        <label>Rating 3 :</label>
        <input type="text" name="rating3" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="Validate">
</form>

<?php
    if(
        isset($_POST['rating1']) && !empty($_POST['rating1']) &&
        isset($_POST['rating2']) && !empty($_POST['rating2']) &&
        isset($_POST['rating3']) && !empty($_POST['rating3']))
        {
            $rating1 = $_POST['rating1'];
            $rating2 = $_POST['rating2'];
            $rating3 = $_POST['rating3'];

            $ratings = [$rating1, $rating2, $rating3];

            $average = calculteAverage($ratings);

            echo "<h2>The average of these ".count($ratings). " ratings is : ".$average." </h2>";
        }

    function calculteAverage($ratings){
        $result = 0;
        foreach($ratings as $rating){
            $result += $rating;
        }
        return $result / count($ratings);
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
