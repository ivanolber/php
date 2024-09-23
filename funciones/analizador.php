<?php
function contarLetrasPorPalabra($frase) {
    $palabras = explode(' ', $frase);

    foreach ($palabras as $palabra) {
        $num_letras = strlen($palabra);

        echo "Palabra: $palabra, Número de letras: $num_letras<br>";
    }
}

contarLetrasPorPalabra('Este es un ejemplo de frase');
?>
