<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distribución de escaños</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .contenedor {
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        table {
            width: 60%;
            border-collapse: collapse;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .resaltado {
            background-color: yellow;
        }
    </style>
</head>
<body>

<div class="contenedor">
    <h1>TABLA DE ESCAÑOS</h1>

    <table>
        <tr>
            <th>Escaños</th>
            <?php foreach ($partidos as $partido => $votos) { ?>
                <th><?php echo $partido; ?></th>
            <?php } ?>
        </tr>

        <?php for ($i = 1; $i <= $escanos; $i++): ?>
            <tr>
                <td>Escaño <?php echo $i; ?></td>
                <?php foreach ($partidos as $partido => $votos) {
                    $valor = $resultados[$partido][$i];
                    // Comprobar si el valor está en el array de mayores
                    $class = in_array($valor, $mayores, true) ? 'resaltado' : ''; // Aplicar la clase resaltado si el valor está en mayores
                    ?>
                    <td class="<?php echo $class; ?>">
                        <?php echo number_format($valor, 0); ?>
                    </td>
                <?php } ?>
            </tr>
        <?php endfor; ?>
    </table>
</div>

</body>
</html>
