<?php

    session_start();
    $articulos = array(
        array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60),
        array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15),
        array("id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50),
        array("id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio" => 20)
    );

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
        $_SESSION['total'] = 0;
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        foreach ($articulos as $articulo) {
            if ($articulo['id'] == $id) {
                $_SESSION['carrito'][] = $articulo;
                $_SESSION['total'] += $articulo['precio'];
                break;
            }
        }
    }

    if (isset($_GET['vaciar'])) {
        $_SESSION['carrito'] = [];
        $_SESSION['total'] = 0;
        header("Location: carro.php");
        exit;
    }

    function getCatalogo() {
        global $articulos;
        return $articulos;
    }
    
    function getCarrito() {
        return isset($_SESSION['carrito']) ? $_SESSION['carrito'] : [];
    }
    
    function getTotal() {
        return isset($_SESSION['total']) ? $_SESSION['total'] : 0;
    }
?>
