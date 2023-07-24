<?php
require_once '../lib/DB.php';
class Estudiantes extends DB
{
    public $bd;
    public $nombre;
    public $paterno;
    public $materno;
    public $email;
    public $table = 'estudiantes';
    public function insertar($registro)
    {
        $conexion = parent::conectar();
        try {
            $query = "INSERT INTO usuarios SET nombre=:nombre,paterno=:paterno, materno=:materno,email=:email";
            $insertar = $conexion->prepare($query)->execute($registro);
            echo "se ha registrado";
        } catch (Exception $e) {
        }
    }
    public function consultar()
    {
        $conexion = parent::conectar();
        try {
            $query = "SELECT * FROM usuarios";
            return $consulta = $conexion->query($query)->fetchAll();
            echo "se ha registrado";
        } catch (Exception $e) {
        }
    }
    public function actualizar($registro)
    {
        $conexion = parent::conectar();
        try {
            $query = "UPDATE usuarios SET nombre=:nombre,paterno=:paterno,materno=:materno WHERE email=:email";
            $actualizar = $conexion->prepare($query)->execute($registro);
        } catch (Exception $e) {
        }
    }
    public function eliminar($accion, $eliminar)
    {
        $conexion = parent::conectar();
        if ($accion == "todos") {
            try {
                $query = "DELETE FROM usuarios";
                $eliminar = $conexion->prepare($query)->execute();
            } catch (Exception $e) {
            }
        } else {
            try {
                $query = "DELETE FROM usuarios WHERE email=:email";
                $eliminar = $conexion->prepare($query)->execute($eliminar);
            } catch (Exception $e) {
            }
        }
    }
}
