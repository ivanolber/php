<?php

function fraseImpares($frase){
    for($i=1;$i<=strlen($frase);$i++){
        if($i%2 ==1){
            echo $frase[$i];
        }
    }
}
fraseImpares("Hola a todos buenas tardes");
?>