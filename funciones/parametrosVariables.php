<?php
function mayor(){

    $args = func_get_args();


    $mayor = $args[0]; 


    foreach ($args as $num) {
        if ($num > $mayor) {
            $mayor = $num;
        }
    }

   
    return $mayor;
}

echo mayor(900,91,0,1,23,9); 
?>
