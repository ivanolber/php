<?php
function euromillon() {
    $num = [];
    $estrellas = [];

    while (count($num) < 5) {
        $rand = rand(1, 49);
        if (!in_array($rand, $num)) {
            $num[] = $rand;
        }
    }

    while (count($estrellas) < 2) {
        $rand = rand(1, 9);
        if (!in_array($rand, $estrellas)) {
            $estrellas[] = $rand;
        }
    }

    return implode(" ", $num) . " | " . implode(" ", $estrellas);
}
?>
