<?php

echo "<h1> Array de personas </h1>";
$personas = array(
array('Nombre' => 'Ivan Olmos' , 
        'Altura' => 1.83 , 
        'Email' => 'ivan@gmail.com'),
array('Nombre' => 'Carles Cortes' , 
'Altura' => 1.73 , 
'Email' => 'carles@gmail.com'),
array('Nombre' => 'alejandro' , 
'Altura' => 1.63 , 
'Email' => 'alejandro@gmail.com')
);

for($i=0;$i<=2;$i++){
echo $personas[$i]['Nombre'] ,"<br>";
echo $personas[$i]['Altura'] ,"<br>";
echo $personas[$i]['Email'] ,"<br>";
}


?>