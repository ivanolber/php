<?php
function contarLetrasPorPalabra($frase) {
    $num_palabras = str_word_count($frase);
    $num_letras = strlen(str_replace(' ','', $frase));


    echo ("el numero de palabras es: " . $num_palabras) . "<br>";
    echo ("el numero de letras es: " . $num_letras);
}
contarLetrasPorPalabra("Este es un ejemplo de frase");
?>
