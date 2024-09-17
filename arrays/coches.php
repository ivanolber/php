<?php

echo "<h2>Array de coches</h2>";
$coches = array(
'1234AAA' => array("Ford", "Focus" , 4),
'1111BBB' => array("BMW" , "Clase G" , 4),
'2222CCC' => array("Opel" , "Corsa" , 3),
'7575KLA' => array("Toyota" , "Corolla" , 4),
'8912HAS' => array('Renaul' , "Laguna" , 4)
);



foreach($coches as $mat=>$tipo){
    echo $mat, "Marca: " , $tipo[0], "Tipo: " , $tipo[1] , "Puertas " , $tipo[2] , "<br>";
}


?>
