<?php
include("bd/conexion.php");
$con = conectar();
$sql = "SELECT *  FROM persona";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title> Registro de personas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/di   st/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5 bg-dark p-3" style="border-radius: 8px;">
        <div class="row">
            <div class="col-md-4">
                <h1>Registre los datos</h1>
                <form action="controler/insertar.php" method="POST">

                    <input type="text" class="form-control mb-3" name="Carnet" placeholder="Carnet">
                    <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombres">
                    <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos">

                    <input type="submit" value="Enviar datos" class="btn btn-primary">
                </form>
            </div>

            <div class="col-md-8">
                <h1>
                    <center>Lista de personas</center>
                </h1>
                <table class="table">
                    <thead class="table-primary table-striped">
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
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $row['Cod'] ?></td>
                                <td><?php echo $row['Carnet'] ?></td>
                                <td><?php echo $row['Apellidos'] ?></td>
                                <td><?php echo $row['Nombres'] ?></td>
                                <td>
                                    <a href="actualizar.php?id=<?php echo $row['Cod'] ?>" class="btn btn-primary">Editar</a>
                                </td>
                                <td>
                                    <a href="controler/delete.php?id=<?php echo $row['Cod'] ?>" class="btn btn-success">Eliminar</a>
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