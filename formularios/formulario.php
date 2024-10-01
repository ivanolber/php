<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

</head>
<body>
    
<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$url = $_POST['url'];
$sex = $_POST['sexo'];

if(isset($_POST['sexo'])){
    $sex = $_POST['sexo'];
}

if(!empty($_POST['convivientes'])){
    $conv = $_POST['convivientes'];
}

if(isset($_POST['afi'])){
    $aficiones = $_POST['afi'];
}

$afi = implode("," , $aficiones);
$menu = implode("," , $_POST['menu']);

?>

<div class="container mt-5">
<h2 class="mb-4">Datos personales</h2>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>Nombre y Apellidos</td>
                    <td><?php echo $nombre ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $email ?></td>
                </tr>
                <tr>
                    <td>URL Página Personal</td>
                    <td><?php echo $url ?></td>
                </tr>
                <tr>
                    <td>Sexo</td>
                    <td><?php echo $sex ?></td>
                </tr>
                <tr>
                    <td>Número de Convivientes</td>
                    <td><?php echo $conv ?></td>
                </tr>
                <tr>
                    <td>Aficiones</td>
                    <td>
                        <?php echo $afi?>
                    </td>
                </tr>
                <tr>
                    <td>Menú Favorito</td>
                    <td>
                        <?php echo $menu ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


</body>
</html>