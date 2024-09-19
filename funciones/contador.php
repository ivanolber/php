<?php

function contar($a,$b){

    for($i=$a; $i<=$b;$i++){
        echo $i ;
        if ($i<$b){
            echo ",";
        }
    }

}

contar(10,20);

?>
