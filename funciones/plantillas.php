<?php

$fichero = "plantillas.csv";
$atleticoData = [];

if (($fich = fopen($fichero, 'r')) !== false) {
    $cabecera = fgetcsv($fich, 1000, ',');

    while (($fila = fgetcsv($fich, 1000, ',')) !== false) {
        if ($fila[1] == "Atlético de Madrid") {
            $atleticoData[] = [
                'Dorsal' => $fila[11],
                'Nombre' => $fila[4],
                'Apellidos' => $fila[5],
                'Posición' => $fila[9],
                'Equipo' => $fila[1],
            ];
        }
    }
    fclose($fich);
} else {
    echo "Error al abrir el archivo.";
}

usort($atleticoData, function($a, $b){
    return $a['Dorsal'] - $b['Dorsal'];
});

include 'plantillas_view.php';
?>
