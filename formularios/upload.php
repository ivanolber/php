<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $imageType = mime_content_type($image['tmp_name']);
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

        if (in_array($imageType, $allowedTypes)) {
            $uploadDir = 'uploads/';
            $imagePath = $uploadDir . basename($image['name']);

            if (move_uploaded_file($image['tmp_name'], $imagePath)) {
                list($width, $height) = getimagesize($imagePath);

                echo "<h1>Imagen subida correctamente</h1>";
                echo "<p>Nombre: " . htmlspecialchars(basename($image['name'])) . "</p>";
                echo "<p>Ruta: " . htmlspecialchars($imagePath) . "</p>";
                echo "<p>Ancho: $width px</p>";
                echo "<p>Alto: $height px</p>";
                echo "<img src='$imagePath' alt='Imagen subida' style='max-width:300px;'><br><br>";
                
                
                echo "<p>Redirigiendo al formulario en 3 segundos...</p>";
                header("refresh:3;url=inicio.php");
            } else {
                echo "Error al mover el archivo.";
            }
        } else {
            echo "El archivo subido no es una imagen. <a href='inicio.php'>Intenta de nuevo</a>";
        }
    } else {
        echo "No se ha seleccionado ningún archivo. <a href='inicio.php'>Intenta de nuevo</a>";
    }
} else {
    echo "Error";
}