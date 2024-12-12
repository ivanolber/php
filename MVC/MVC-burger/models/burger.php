<?php
require_once "config/conexion.php";

class Burger{
    private $pdo;
    public function __construct(){
        $database = new Conexion();
        $this->pdo = $database->conectar();
    }

    public function getAll(){
        try{
            $query = "SELECT * FROM items";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetchAll();
        } catch (PDOException $e) {
            die($e->getMessage());
    }
}
    public function getById($id)
    {
        try{
        $query = "SELECT * FROM items WHERE id = $id";
        $registro = $this->pdo->prepare($query);
        $registro->execute();
        return $registro->fetch();
    } catch (PDOException $e) 
    {
        die($e->getMessage());
    }
}
    public function delete($d)
    {
        try{
            $insercion = $this->pdo->prepare("delete from items where id=:id");
            $insercion->bindParam(':id', $d);
            return $insercion->execute();     
        }catch(PDOException $e)
        {
            die($e->getMessage());
        }
}

public function edit($t,$g,$p,$img,$c)
{
try{
$insercion = $this->pdo->prepare("update items set name=:nombre, description=:descripcion, price=:precio , image=:imagen , category=:categoria where id=:id");
$insercion->bindParam(':id', $i);
$insercion->bindParam(':nombre', $t);
$insercion->bindParam(':descripcion', $g);
$insercion->bindParam( ':precio', $p);
$insercion->bindParam( ':imagen', $img);
$insercion->bindParam( ':categoria', $c);

$insercion->execute();
return true;
}catch (PDOException $e)
{
die($e->getMessage());
}
}

public function save($t,$g,$p,$img,$c)
{
try{
$insercion = $this->pdo->prepare("INSERT INTO items(name, description, price, image, category) VALUES(:nombre, :descripcion, :precio, :imagen, :categoria)");
$insercion->bindParam(':nombre', $t);
$insercion->bindParam(':descripcion', $g);
$insercion->bindParam( ':precio', $p);
$insercion->bindParam( ':imagen', $img);
$insercion->bindParam( ':categoria', $c);

return $insercion->execute();
}catch (PDOException $e)
{
die($e->getMessage());
}
}

public function update($i,$t,$g,$p,$img,$c)
{
    $query = "UPDATE items SET nombre = :nombre, descripcion = :descripcion, precio = :precio, imagen=:imagen , categoria =:categoria WHERE id = :id";
    $insercion = $this->pdo->prepare($query);
    $insercion->bindParam(':id', $i);
$insercion->bindParam(':nombre', $t);
$insercion->bindParam(':descripcion', $g);
$insercion->bindParam( ':precio', $p);
$insercion->bindParam( ':imagen', $img);
$insercion->bindParam( ':categoria', $c);

return $insercion->execute();
}


}




?>