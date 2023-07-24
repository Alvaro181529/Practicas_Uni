<?php
    class conexion{
        public $con;
        public function conectar(){
            $this->con=mysqli_connect("localhost","root","12345","crud_php");
        }
    }

?>