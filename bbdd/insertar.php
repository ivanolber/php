<?php
  require_once "libros.php";

  
  // MYSQL: Borrado y creación de base de datos y tablas



    $pdo=conectaDb();


  
    $insercion = $pdo->prepare("INSERT INTO libros(titulo, descripcion,created_at) VALUES(:titulo, :descripcion, :created_at)");
                 $insercion->bindParam(':titulo', $_REQUEST['titulo']);
                 $insercion->bindParam(':descripcion', $_REQUEST['descripcion']);
                 $insercion->bindParam(':created_at', $_REQUEST['created_at']);

             

    if(!$insercion->execute()) 
        echo "<p class=\"aviso\">Error al ejecutar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()}</p>\n";
    
   


$pdo = null;
header("Location:inicio.php");

