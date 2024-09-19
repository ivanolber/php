<?php

function comprueba_hora($hora){

    $partes = explode(":" , $hora);

    if (count($partes) !== 3) {
        echo "Formato de hora inválido.";
        exit;
    }

    $hh = (int)$partes[0];
    $mm = (int)$partes[1];
    $ss = (int)$partes[2];

    if ($hh >= 0 && $hh <= 23 && $mm >= 0 && $mm <= 59 && $ss >= 0 && $ss <= 59) {
        echo "La hora $hora es válida.";
    } else {
        echo "La hora $hora no es válida.";
    }

}

comprueba_hora("21:30:55");

?>
