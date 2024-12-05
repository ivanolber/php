<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases Persona</title>
</head>
<body>
    
<?php

class Persona{

    private $nombre;
    private $dni;
    private $email;


    public function __construct($nombre, $dni, $email){
        $this->setNombre($nombre);
        $this->setDni($dni);
        $this->setEmail($email);
    }

    public function setNombre($nombre){
        $this-> nombre = $nombre;
    }
    
    public function setDni($dni){
        $this-> dni = $dni;
    }

    public function setEmail($email){
        $this-> email = $email;
    }

    public function getDni() {
        return $this->dni;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function mostrarDatos(){
        echo "DNI - " . $this-> dni . "<br>";
        echo "Nombre - " . $this-> nombre . "<br>";
        echo "Email - " . $this-> email . "<br>";
    }
}

class Estudiante extends Persona{

    private $numExpediente;

    public function __construct($nombre, $dni , $email , $numExpediente){
        parent::__construct($nombre, $dni, $email);
        $this->setNumexp($numExpediente);
    }

    public function setNumexp($numExpediente){
        $this-> numExpediente = $numExpediente;
    }

    public function getNumexp(){
        return $this->numExpediente;
    }

    public function mostrarDatos(){
        parent::mostrarDatos();
        echo "Número de Expediente - " . $this->numExpediente . "<br>";

    }

}

$persona1 = new Persona("Ivan" , "73643288P" , "ivaolmber@alu.edu.gva.es");
$persona1 -> setNombre("Lucas");
$persona1 -> mostrarDatos();
echo "<br>";
$estudiante1 = new Estudiante("Juan" , "4732547Z" , "juan@alumno.gva.es" , 4567);
$estudiante1 -> mostrarDatos();

?>


</body>
</html>

