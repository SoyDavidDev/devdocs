<?php
class Persona
{
    private $dni;
    private $nombre;
    private $email;

    public function __construct($dni, $nombre, $email){

        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function __getDni(){
        return $this->dni;
    }

    public function __getNombre(){
        return $this->nombre;
    }

    public function __getEmail(){
        return $this->email;
    }

    public function setDni($dni){

        $this->dni = $dni;
    }

    public function setNombre($nombre){

        $this->nombre = $nombre;
    }

    public function setEmail($email){

        $this->email = $email;
    }

    public function Mostrar(){
        echo "<p>DNI: $this->dni  </p>";
        echo "<p>NOMBRE: $this->nombre  </p>";
        echo "<p>EMAIL: $this->email </p>";

    }
}

$pers = new Persona("432342342", "David", "dafasdf@gmail.com");

$pers->Mostrar();

class Estudiante extends Persona
{
    private $numExpediente;


    public function __construct( $dni, $nombre, $email,$numExpediente)
    {
        parent::__construct($dni, $nombre, $email);
        $this->numExpediente = $numExpediente;
    }

    public function __getNumExpediente()
    {
        return $this->numExpediente;
    }

    public function setEmail($numExpediente){

        $this->numExpediente = $numExpediente;
    }

}

$estudiante = new Estudiante("dfasdfasdf", "DFADSF", "FDADSF@GMAIL.COM", "28");

$estudiante->Mostrar();
echo "<p>NUM EXP: "  . $estudiante->__getNumExpediente(); " </p>";

?>