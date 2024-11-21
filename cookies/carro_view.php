<?php
include 'carro.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
            color: #333;
        }

        h1, h2 {
            color: #0056b3;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 5px;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        p {
            font-size: 1.1em;
        }

        strong {
            color: #dc3545;
        }

        .vaciar-carro {
            color: #dc3545;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Catálogo de Artículos</h1>
    <ul>
        <?php foreach (getCatalogo() as $articulo): ?>
            <li>
                <a href="carro_view.php?id=<?php echo $articulo['id']; ?>">
                    <?php echo $articulo['nombre'] . " (" . $articulo['precio'] . " euros)"; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Carrito de Compras</h2>
    <?php $carrito = getCarrito(); ?>
    <?php if (!empty($carrito)): ?>
        <ul>
            <?php foreach ($carrito as $item): ?>
                <li><?php echo $item['nombre'] . " - " . $item['precio'] . " euros"; ?></li>
            <?php endforeach; ?>
        </ul>
        <p><strong>Total: <?php echo getTotal(); ?> euros</strong></p>
        <p><a class="vaciar-carro" href="carro_view.php?vaciar=true">Vaciar carro</a></p>
    <?php else: ?>
        <p>El carrito está vacío.</p>
    <?php endif; ?>

</body>
</html>
