<?php
    function displayArray($tab){
        echo "<div>";
        for($i=0; $i < count($tab); $i++){
            echo ($i===0) ? " " : " - ";
            echo $tab[$i];
        }
        echo "</div>";
    }

    function calculateAverage($tabs){

        $result = 0;

        foreach($tabs as $tab) {
            $result += $tab;
        }
        return $result/count($tabs);

    }

    function isEvenArray($tabs){
       
        foreach($tabs as $tab){
            if($tab % 2 !==0) return false;
        }
        return true;
    }