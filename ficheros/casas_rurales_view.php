<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casas rurales</title>
    <style>
        table{

            border-collapse:collapse;

        }
    </style>
</head>
<body>
    <h1>TABLA DE CASAS RURALES</h1>
<?php
if (!empty($casasData)) {
    echo "<table border='2px'>";
    echo "<tr><th>Id</th><th>Localidad</th><th>Nombre</th><th>Telefono</th></tr>";

    foreach ($casasData as $casa) {
        echo "<tr>";
        echo "<td>{$casa['id']}</td>";
        echo "<td>{$casa['localidad']}</td>";
        echo "<td>{$casa['nombre']}</td>";
        echo "<td>{$casa['telefono']}</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "Casas sin numero de telefono: " . $contador;
} else {
    echo "No se encontró información sobre casas rurales en la zona.";
}
?>





</body>
</html>
