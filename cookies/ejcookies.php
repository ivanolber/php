<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
    <style>
        body{
            text-align:center;
            background-color:lightgrey;
        }
    </style>
</head>
<body>
    

<?php

$nombre ="Ivan";
if(!isset($_COOKIE["user"])){
    setcookie('user' , $nombre, time() + 1000);
    echo "<h2>La cookie no está creada por tanto el valor será: " . $nombre . "</h2>";

} else {
    echo "<h2>La cookie ya está creada y tiene el valor: ". $_COOKIE["user"] . "</h2>";
}



?>



</body>
</html>