<?php
    include("persona.php");
    // $persona= new Persona;
    // $persona->Apellidos="aaaaa";
    // $persona->Nombres="bbbb";
    // $persona->Carnet="33331";
    // $persona->create();
    //probar la actualizacion
    // $persona=Persona::getById(12);
    // var_dump($persona);
    // $persona->Carnet="4444";
    // $persona->update();
    //probar el borrado
    // $persona=Persona::getById(12);
    // $persona->delete();
    //$personas=Persona::getAll();
    //var_dump($personas);
    $personas=Persona::getAll();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title> Registro de personas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">        
    </head>
    <body>
        <div class="container mt-5 bg-light p-3" style="border-radius: 8px;">
            <div class="row">                         
                    <div class="col-md-4">
                            <h1>Registre los datos</h1>
                                <form action="insertar.php" method="POST">
                                                                       
                                    <input type="text" class="form-control mb-3" name="Carnet" placeholder="Carnet">
                                    <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <h1><center>Lista de personas</center></h1>
                            <table class="table table-dark" >
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Carnet</th>
                                        <th>Apellidos</th>
                                        <th>Nombres</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            foreach($personas as $persona){
                                        ?>
                                            <tr>
                                                <td><?php  echo $persona->Cod?></td>
                                                <td><?php  echo $persona->Carnet?></td>
                                                <td><?php  echo $persona->Apellidos?></td>
                                                <td><?php  echo $persona->Nombres?></td>    
                                                <td>
                                                    <a href="actualizar.php?id=<?php echo $persona->Cod?>" class="btn btn-primary">Editar</a>
                                                </td>
                                                <td>
                                                    <a href="borrar.php?id=<?php echo $persona->Cod ?>" class="btn btn-success">Eliminar</a>
                                                </td>
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>


//DELETE
    public function delete()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM automovil WHERE codigo=?");
        $pre->bind_param("i", $this->Codigo);
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
        return $res->fetch_object(Automovil::class);
    }

    //UPDATE
    public function update()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE automovil SET cilindro=?, color=?, marca=?, placa=?, kilometraje=?, img=? WHERE codigo=?");
        $pre->bind_param("isssisi", $this->Cilindro, $this->Color, $this->Marca, $this->Placa, $this->Kilometraje, $this->Img, $this->Codigo);
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
        while ($auto = $res->fetch_object(Automovil::class))
            array_push($autos, $auto);
        return $autos;
    }