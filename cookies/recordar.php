<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $recordar = isset($_POST['recordar']) ? true : false;

    if ($recordar) {
        setcookie('login', $login, time() + (86400 * 30), "/");
        setcookie('pass', $pass, time() + (86400 * 30), "/");
        setcookie('recordar', '1', time() + (86400 * 30), "/");
    } else {
        setcookie('login', '', time() - 3600, "/");
        setcookie('pass', '', time() - 3600, "/");
        setcookie('recordar', '', time() - 3600, "/");
    }

    header('Location: recordar_view.php');
    exit();
}

?>
