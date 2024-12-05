<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos de videojuegos</title>
    <style>body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
    color: #333;
    line-height: 1.6;
}

h1 {
    text-align: center;
    color: #444;
    margin: 20px 0;
}

a {
    color: #007BFF;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* Table Styles */
table {
    width: 90%;
    margin: 20px auto;
    border-collapse: collapse;
    background: white;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

th, td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

th {
    background-color: #007BFF;
    color: white;
    text-transform: uppercase;
}

td {
    background-color: #f9f9f9;
}

tr:hover td {
    background-color: #f1f1f1;
}

/* Button Styles */
button {
    display: inline-block;
    padding: 10px 15px;
    font-size: 16px;
    color: white;
    background-color: #007BFF;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

/* Form Styles */
form {
    width: 80%;
    max-width: 500px;
    margin: 20px auto;
    padding: 20px;
    background: white;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input {
    width: calc(100% - 20px);
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="number"] {
    max-width: 150px;
}

/* Link Button */
a.button {
    display: inline-block;
    padding: 10px 15px;
    margin: 10px 0;
    font-size: 16px;
    color: white;
    background-color: #007BFF;
    border-radius: 5px;
    text-align: center;
}

a.button:hover {
    background-color: #0056b3;
}
</style>
</head>
<body>
    


<?php
require_once "controllers/controlador.php";
    $index = new VideojuegoController();
    $action = $_GET["action"] ?? null;
    $id = $_GET["id"] ?? null;
    
    if($action == "edit"){
        $index->edit($id);
    } elseif ($action == "delete") {
        $index->delete($id);
    } elseif ($action == "create"){
        $index->create();
    } else{
        $index->index();
    }
?>









</body>
</html>
