

<?php

$user =[
    'usuario' => 'ivan',
    'contrasena' => '1234'
];


if($_POST['usuario'] == $user['usuario'] && $_POST['contrasena'] == $user['contrasena']){

    header("Location:ok.php");
    exit();

}else{
    header("Location:ko.php");
    exit();
}

?>
