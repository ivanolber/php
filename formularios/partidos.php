<?php

$partidos = [
    'Partido A' => 500000,
    'Partido B' => 300000,
    'Partido C' => 150000,
    'Partido D' => 50000
];

$escanos = 7;
$clase = 'resaltado';

$resultados = [];
$resaltados = [];

foreach ($partidos as $partido => $votos) {
    for ($i = 1; $i <= $escanos; $i++) {
        $resultados[$partido][$i] = $votos / $i;
    }
}

$valoresPlanas = [];
foreach ($resultados as $partido => $escanosArray) {
    foreach ($escanosArray as $escaño => $valor) {
        $valoresPlanas[] = $valor;
    }
}

arsort($valoresPlanas);
$mayores = array_slice($valoresPlanas, 0, 7);

include 'partidos_view.php';
?>
