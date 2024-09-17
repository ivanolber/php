<?php

echo "<h1> Array 1</h1>";
$cantidad = 50;
$array1 = array();

while (count($array1)<$cantidad){

    $array1[] = rand(0,99);

}

echo "<h2>Array randomizado</h2>";

for($i=0;$i <= $cantidad;$i++){
    echo $array1[$i], " ";
}

echo "<h2>Menor y mayor</h2>";

sort($array1);
echo $array1[0] ,"-";
echo $array1[49];

echo "<h2> Media de los numeros</h2>";
$media = array_sum($array1)/50;
echo $media;

?>