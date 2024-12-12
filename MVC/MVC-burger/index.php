<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos de Burgers</title>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #eef2f3;
            color: #222;
        }

        header {
            background-color: #ff6b6b;
            color: white;
            text-align: center;
            padding: 1rem 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 2rem;
        }

        main {
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #ff6b6b;
            color: white;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        button, .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 0;
            font-size: 14px;
            font-weight: bold;
            color: white;
            background-color: #ff6b6b;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        button:hover, .button:hover {
            background-color: #e55050;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 20px auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        h1 {
            margin-top: 20px;
            text-align: center;
            color: #333;
        }

        a {
            color: #ff6b6b;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        a.button {
            background-color: #ff6b6b;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 20px;
        }

        a.button:hover {
            background-color: #e55050;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #ff6b6b;
            color: white;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    


<?php
require_once "controllers/controlador.php";
    $index = new burgerController;
    $action = $_GET["action"] ?? null;
    $id = $_GET["id"] ?? null;
    
    if($action == "edit"){
        $index->edit($id);
    } elseif ($action == "delete") {
        $index->delete($id);
    } elseif ($action == "create"){
        $index->create();
    } elseif ($action == "listarProductos"){
        $index->listarProductos($id);
    } elseif($action == "burgerAdmin"){
        $index->indexAdmin();
    } else{
        $index->indexUser();
    }
?>









</body>
</html>
