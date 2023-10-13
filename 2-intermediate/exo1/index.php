<?php ob_start();
$title = "Exo 1 : Multidimentional Arrays"; //Title of the training
?>

<!-- The code here -->

<?php
    // $line = [];
    // for($j=1; $j <= 10; $j++){
    //     $column = [];
    //     for($i=1; $i <= 10; $i++){
    //         $column[] = $i*$j;
    //     }
    //     $line[] = $column;
    // }
?>

<table class="table">
    <?php for($j=1; $j <= 10; $j++) : ?>
        <tr <?= ($j===1) ? 'class="font-weight-bold"' : '' ?>>
            <?php for($i=1; $i <= 10; $i++) : ?>
                <td <?= ($i===1) ? 'class="font-weight-bold"' : '' ?>>
                    <?= $i*$j ?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>


<?php
/************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
