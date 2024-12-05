<?php
require 'config/configLogin.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usu = $_POST['usuario'];
    $pas = $_POST['password'];

    if (!empty($usu) && !empty($pas)) {
        $sql = "INSERT INTO usuarios (usuario, password) VALUES (:usuario, :password)";
        $sentencia = $conexion->prepare($sql);
        $isOk = $sentencia->execute([
            "usuario" => $usu,
            "password" => password_hash($pas, PASSWORD_DEFAULT)
        ]);

        if ($isOk) {
            echo "Usuario registrado con éxito.";
        } else {
            echo "Error al registrar el usuario.";
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
}
?>
<form method="POST">
    <input type="text" name="usuario" placeholder="Nombre de usuario" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button type="submit">Registrar</button>
</form>
<a href="login.php">Iniciar sesión</a>
