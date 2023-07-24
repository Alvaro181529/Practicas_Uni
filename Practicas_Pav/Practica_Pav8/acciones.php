<?php
include("bd.php");
class auto extends conexion
{
    public $codigo;
    public $cilindro;
    public $color;
    public $marca;
    public $placa;
    public $kilometraje;

    //Encapsulamiento
    //codigo
    function set_codigo($codigo)
    {
        $this->codigo = $codigo;
    }
    function get_codigo()
    {
        return  $this->codigo;
    }
    //cilindro
    function set_cilindro($cilindro)
    {
        $this->cilindro = $cilindro;
    }
    function get_cilindro()
    {
        return  $this->cilindro;
    }
    //color
    function set_color($color)
    {
        $this->color = $color;
    }
    function get_color()
    {
        return  $this->color;
    }
    //marca
    function set_marca($marca)
    {
        $this->marca = $marca;
    }
    function get_marca()
    {
        return  $this->marca;
    }
    //placa
    function set_placa($placa)
    {
        $this->placa = $placa;
    }
    function get_placa()
    {
        return  $this->placa;
    }
    //kilometraje
    function set_kilometraje($kilometraje)
    {
        $this->kilometraje = $kilometraje;
    }
    function get_kilometraje()
    {
        return  $this->kilometraje;
    }

    //CRUDS
    //create
    public function create()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO automovil (cilindro, color, marca, placa, kilometraje) VALUE (?,?,?,?,?)");
        $pre->bind_param("isssi", $this->cilindro, $this->color, $this->marca, $this->placa, $this->kilometraje);
        $pre->execute();
    }

    //DELETE
    public function delete()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM automovil WHERE codigo=?");
        $pre->bind_param("i", $this->codigo);
        $pre->execute();
    }

    //GET_ID
    public static function getById($cod)
    {
        $conexion = new Conexion;
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM automovil WHERE codigo=?");
        $pre->bind_param("i", $cod);
        $pre->execute();
        $res = $pre->get_result();
        return $res->fetch_object(Auto::class);
    }

    //UPDATE
    public function update()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE automovil SET cilindro=?, color=?, marca=?, placa=?, kilometraje=? WHERE codigo=?");
        $pre->bind_param("isssii", $this->cilindro, $this->color, $this->marca, $this->placa, $this->kilometraje, $this->codigo);
        $pre->execute();
    }

    //SELECT
    public static function getAll()
    {
        $conexion = new Conexion;
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM automovil");
        $pre->execute();
        $res = $pre->get_result();
        $autos = [];
        while ($auto = $res->fetch_object(Auto::class))
            array_push($autos, $auto);
        return $autos;
    }
}
