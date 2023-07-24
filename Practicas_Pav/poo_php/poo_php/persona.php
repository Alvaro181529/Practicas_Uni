<?php
    include("conexion.php");
    class Persona extends Conexion{
        public $Cod;
        public $Apellidos;
        public $Nombres;
        public $Carnet;
        //Crear 
        public function create(){
            $this->conectar();
            $pre=mysqli_prepare($this->con,"INSERT INTO persona (Apellidos,Nombres,Carnet) VALUE (?,?,?)");
            $pre->bind_param("sss",$this->Apellidos,$this->Nombres,$this->Carnet);
            $pre->execute();
            $res=$pre->get_result();
        }
        //BORRAR
        public function delete(){
            $this->conectar();
            $pre=mysqli_prepare($this->con,"DELETE FROM persona WHERE Cod=?");
            $pre->bind_param("i",$this->Cod);
            $pre->execute();
        }
        //GET BY ID (SELECCIONAR UN REGISTRO ESPECIFICO)
        public static function getById($cod){
            $conexion= new Conexion();
            $conexion->conectar();
            $pre=mysqli_prepare($conexion->con,"SELECT * FROM persona WHERE Cod=?");
            $pre->bind_param("i",$cod);
            $pre->execute();
            $res= $pre->get_result();
            return $res->fetch_object(Persona::class);
        }
        //ACTUALIZAR
        public function update(){
            $this->conectar();
            $pre=mysqli_prepare($this->con,"UPDATE persona SET Apellidos=?, Nombres=?, Carnet=? WHERE Cod=?");
            $pre->bind_param("sssi",$this->Apellidos,$this->Nombres,$this->Carnet, $this->Cod);
            $pre->execute();
        }
        //SELECCIONAR TODOS LOS DATOS
        public static function getAll(){
            $conexion= new Conexion();
            $conexion->conectar();
            $pre=mysqli_prepare($conexion->con,"SELECT * FROM persona");            
            $pre->execute();
            $res= $pre->get_result();
            $personas=[];
            while($persona=$res->fetch_object(Persona::class))
                array_push($personas,$persona);
            return $personas;
        }
        
    }
?>