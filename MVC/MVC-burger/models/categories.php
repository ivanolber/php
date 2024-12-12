<?php

require_once "config/conexion.php";

class Categories{

    private $pdo;
    public function __construct(){
        $database = new Conexion();
        $this->pdo = $database->conectar();
    }

    public function getAll(){

        try{
            $query = "SELECT * FROM categories";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetchAll();
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
    public function getById($id){
        try{
            $query = "SELECT * FROM categories WHERE id = $id";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetch();
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
}
?>