<?php
class conexion {
public $con;
public function conectar(){
    $this->con=mysqli_connect("localhost","root","","crud_persona");
}
}
?>