<?php

echo "<h2> Contadores </h2>";
echo "Conteo de 1 a 100:<br>";
for ($i = 1; $i <= 100; $i++) {
    echo $i;
    if ($i < 100) {
        echo ","; 
    }
}

echo "<br>";
$j = 10;

echo "<br>Conteo del 10 al 0<br>";
while ($j >= 0) {
    echo $j;
    if ($j > 0) {
        echo "-"; 
    }
    $j--;
}

?>