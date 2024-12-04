<?php
if (!empty($atleticoData)) {
    echo "<table border='1'>";
    echo "<tr><th>Dorsal</th><th>Nombre</th><th>Apellidos</th><th>Posición</th><th>Equipo</th></tr>";

    foreach ($atleticoData as $jugador) {
        echo "<tr>";
        echo "<td>" . ($jugador['Dorsal']) . "</td>";
        echo "<td>" . ($jugador['Nombre']) . "</td>";
        echo "<td>" . ($jugador['Apellidos']) . "</td>";
        echo "<td>" . ($jugador['Posición']) . "</td>";
        echo "<td>" . ($jugador['Equipo']) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron jugadores del Atlético de Madrid.";
}
?>
