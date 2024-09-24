<?php
function esPalindromo($frase) {
    $frase = strtolower(str_replace(' ', '', $frase));
    
    $fraseInvertida = strrev($frase);
    
    return $frase === $fraseInvertida;
}

$frase = "ligar esser agil
ser agil";
if (esPalindromo($frase)) {
    echo "La frase es un palíndromo.";
} else {
    echo "La frase no es un palíndromo.";
}
?>
