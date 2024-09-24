<?php
function cani($frase) {
    $resultado = '';
    for ($i = 0; $i < strlen($frase); $i++) {
        $resultado .= ($i % 2 == 0) ? strtoupper($frase[$i]) : strtolower($frase[$i]);
    }
    return $resultado;
}

$frase = "Hola buenas tardes";
echo cani($frase);
?>
