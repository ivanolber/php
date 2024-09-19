<?php

function intercambia(&$a,&$b){

    $aux = $a;
    $a = $b;
    $b = $aux;
    
   
}

$a=10;
$b=20;
echo("Los valores intercambiados son a: ".  $a ." y b: " .$b);
echo "<br>";
intercambia($a,$b);
echo("Los valores intercambiados son a: ".  $a ." y b: " .$b);

?>