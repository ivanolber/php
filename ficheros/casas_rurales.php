<?php

$fichero = "casas_rurales.csv";
$casasData = [];
$contador =0;

if (($fich = fopen($fichero, 'r')) !== false) {
    $cabecera = fgetcsv($fich, 1000, ';');

    while (($fila = fgetcsv($fich, 1000, ';')) !== false) {
            $id = $fila[0];
            $localidad = $fila[1];
            $nombre = $fila[3];
            $telefono = $fila[9];
            if(!empty($telefono)){
                $casasData[] = [
                    'id' => $id,
                    'localidad' => $localidad,
                    'nombre' => $nombre,
                    'telefono' => $telefono
                ];
            } else{
                $contador++;
            }
        
    }
}
    fclose($fich);



include 'casas_rurales_view.php';
?>
