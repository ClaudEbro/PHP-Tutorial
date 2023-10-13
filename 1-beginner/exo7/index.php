<?php ob_start(); //DO NOT MODIFY 
$title = "Exo 7 : Switch"; //Put the title of the page that you want.
?>

<!-- Put your code here -->
<?php

$random = random_int(1,12);
$month = " ";

switch ($random) {
    case 1 : {$month = "January";
        break;
    }

    case 2 : {$month = "February";
        break;
    }

    case 3 : {$month = "March";
        break;
    }

    case 4 : {$month = "April";
        break;
    }

    case 5 : {$month = "May";
        break;
    }

    case 6 : {$month = "June";
        break;
    }

    case 7 : {$month = "July";
        break;
    }

    case 8 : {$month = "August";
        break;
    }

    case 9 : {$month = "September";
        break;
    }

    case 10 : {$month = "October";
        break;
    }

    case 11 : {$month = "November";
        break;
    }

    case 12 : {$month = "December";
        break;
    }
}
echo "The month <b>$random</b> corresponds to <b>$month</b> in letters.";




?>   

<?php
/************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
