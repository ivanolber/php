<?php

$sexo = array();
$j = 100;

while (count($sexo)<$j){

    $sexo[] = rand(0,1);

}

print_r($sexo);
$contador["M"]=0;
$contador["F"]=0;


for($i=0; $i<=count($sexo); $i++){

    if($sexo[$i] == 0){
        $contador["M"]++;
    } elseif($sexo[$i] == 1){
        $contador["F"]++;
    }
}

echo "<br>";
print_r($contador);

?>