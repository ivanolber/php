<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista imágenes</title>
</head>
<body>
    <h1>Lista imágenes</h1>

    <a href="inicio.php">Subir imagen</a>
    <br><br>

    <?php
    $uploadDir = 'uploads/';
    $files = scandir($uploadDir);
    $imageFiles = array_filter($files, function ($file) use ($uploadDir) {
        return is_file($uploadDir . $file) && preg_match('/\.(jpg|jpeg|png|gif)$/i', $file);
    });

    if (count($imageFiles) > 0) {
        foreach ($imageFiles as $file) {
            echo "<div>";
            echo "<img src='$uploadDir$file' alt='$file' style='max-width:150px;'><br>";
            echo "<p>Nombre: " . $file . "</p>";
            echo "</div><br>";
        }
    } else {
        echo "<p>No hay imágenes</p>";
    }
    ?>
</body>
</html>