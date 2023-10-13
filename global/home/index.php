<?php ob_start(); ?>

<!-- Put your code here -->

<?php
    $title = "My PHP training website";
    $content = ob_get_clean();
    require "../common/template.php";
?>
