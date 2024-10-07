<?php
function primitiva() {
    $num = [];
    while (count($num) <= 5) { 
        $rand = rand(1, 50);

        if (!in_array($rand, $num)) {
            $num[] = $rand;
        }
    }
    foreach($num as $numero){
      echo " " . $numero;
    }
}
?>
