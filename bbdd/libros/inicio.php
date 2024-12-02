<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <span class="fw-bold">Bienvenido, <?php echo htmlspecialchars($usuario); ?>!</span>
            </div>
            <div>
                <a href="logout.php" class="btn btn-outline-danger btn-sm">Cerrar sesión</a>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="text-center text-primary fw-bold mb-4">Gestión de Libros - CRUD</h2>
                <form action="insertar.php" method="post" class="row g-3">
                    <div class="col-md-6">
                        <label for="titulo" class="form-label">Título del Libro</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" maxlength="100" required>
                    </div>
                    <div class="col-md-6">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" name="descripcion" id="descripcion" class="form-control" maxlength="100" required>
                    </div>
                    <div class="col-12 text-end">
                        <hr>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="mt-5">
            <?php include("listar.php"); ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
