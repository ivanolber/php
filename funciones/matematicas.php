<?php

function numeros(int $num){

    $cantidad_digitos = strlen($num);
    echo $cantidad_digitos;


}


function digitoN(int $num, int $pos){

    $digito = substr($num, $pos, 1);
    echo "El numero de la posicion indicada es: " . $digito;

}

function quitaPorDetras(int $num , int $cant){

    $cadena = $num;

    $cadenaRecortada = substr($cadena,0,-$cant);
    echo "La cadena recortada es: " . $cadenaRecortada;

}

function quitaPorDelante(int $num , int $cant){

    $cadena = $num;

    $cadenaRecortada = substr($cadena,3);
    echo "La cadena recortada es: " . $cadenaRecortada;

}


numeros(123345678);
echo "<br>";
digitoN(12337 , 2);
echo "<br>";
quitaPorDetras(1438296427 , 3);
echo "<br>";
quitaPorDelante(1438296427 , 3)



?>

