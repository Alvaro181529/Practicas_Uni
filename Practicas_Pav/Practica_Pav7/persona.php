<?php
include("conexion.php");
class persona extends conexion
{
    public $Cod;
    public $Apellidos;
    public $Nombres;
    public $Carnet;
    //crud create
    public function create()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO persona( Apellidos, Nombre, Carnet) VALUE (?,?,?)");
        $pre->bind_param("sss", $this->Apellidos, $this->Nombres, $this->Carnet);
        $pre->execute();
    }
    public function delete()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM persona WHERE = Cod = ?");
        $pre->bind_param("i", $this->Cod);
        $pre->execute();
    }
    public static function getById($cod)
    {
        $conexion = new conexion();
        $conexion->conectar();
    }
}
