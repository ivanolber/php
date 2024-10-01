<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>

table {
  width: 100%;
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid #ddd;
  
}

th, td {
  padding: 8px;
  text-align: left;
}

th {
  background-color: #f2f2f2;
  color: #333;
}
tr:hover {
  background-color: #f1f1f1;
}
    </style>
</head>
<body>
    
<?php

$x = $_GET['x'];
$y = $_GET['y'];
$suma = $x + $y;
$resta = $x - $y;
$multiplicar = $x * $y;
$division = $x / $y;

?>

<table>
    <tr>
        <td>Suma</td>
        <td><?php echo $suma ?></td>
    </tr>
    <tr>
        <td>Resta</td>
        <td><?php echo $resta ?></td>
    </tr>
    <tr>
        <td>Multiplicacion</td>
        <td><?php echo $multiplicar ?></td>
    </tr>
    <tr>
        <td>Division</td>
        <td><?php echo $division ?></td>
    </tr>
</table>

</body>
</html>



