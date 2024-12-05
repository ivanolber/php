<?php
$login = isset($_COOKIE['login']) ? $_COOKIE['login'] : '';
$pass = isset($_COOKIE['pass']) ? $_COOKIE['pass'] : '';
$recordar = isset($_COOKIE['recordar']) ? true : false;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recordar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h3 class="text-center mb-4">Iniciar sesión</h3>
                <form method="post" action="recordar.php">
                    <div class="mb-3">
                        <label for="login" class="form-label">Usuario:</label>
                        <input type="text" id="login" name="login" class="form-control" value="<?php echo($login); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="pass" class="form-label">Contraseña:</label>
                        <input type="password" id="pass" name="pass" class="form-control" value="<?php echo($pass); ?>" required>
                    </div>

                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="recordar" name="recordar" <?php if ($recordar) echo 'checked'; ?>>
                        <label for="recordar" class="form-check-label">Recordar</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
