<?php
include_once("header.php");
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-8">
            <h2 class="text-primary">Modificar <b>Libro</b></h2>
        </div>
    </div>

    <?php
    require_once "libros.php";
    $pdo = conectaDb();
    $consulta = $pdo->prepare("SELECT * FROM libros WHERE id = :id");
    $consulta->bindParam(':id', $_REQUEST['id']);
    $consulta->execute();
    $registro = $consulta->fetch();

    $id = $registro['id'];
    $titol = htmlspecialchars($registro['titulo'], ENT_QUOTES, 'UTF-8');
    $desc = htmlspecialchars($registro['descripcion'], ENT_QUOTES, 'UTF-8');

    echo "<div class='card shadow-sm mt-4'>";
    echo "<div class='card-body'>";
    echo "<form action='editar.php' method='post' class='row g-3'>";
    echo "<div class='col-md-6'>";
    echo "<label for='titulo' class='form-label'>Título:</label>";
    echo "<input type='text' name='titulo' id='titulo' class='form-control' maxlength='100' value='$titol' required>";
    echo "</div>";
    echo "<div class='col-md-6'>";
    echo "<label for='descripcion' class='form-label'>Género:</label>";
    echo "<input type='text' name='descripcion' id='descripcion' class='form-control' maxlength='100' value='$desc' required>";
    echo "</div>";
    echo "<input type='hidden' name='id' id='id' value='$id'>";
    echo "<div class='col-12 text-end'>";
    echo "<hr>";
    echo "<button type='submit' class='btn btn-primary'>Guardar datos</button>";
    echo "</div>";
    echo "</form>";
    echo "</div>";
    echo "</div>";

    $pdo = null;
    ?>
</div>
</body>
</html>
