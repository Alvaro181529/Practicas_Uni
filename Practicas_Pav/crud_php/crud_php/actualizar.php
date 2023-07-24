<?php
include("bd/conexion.php");


$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM persona WHERE Cod='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5">
        <form action="controler/update.php" method="POST">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 bg-light p-3">
                    <h2 class="bg-secondary p-3" style="border-radius: 5px;">Actualizar datos</h2>
                    <input type="hidden" name="Cod" value="<?php echo $row['Cod'] ?>">
                    <label for="" class="">Carnet</label>
                    <input type="text" class="form-control mb-3" name="Carnet" placeholder="Carnet" value="<?php echo $row['Carnet']  ?>">
                    <label for="" class="">Apellidos</label>
                    <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos" value="<?php echo $row['Apellidos']  ?>">
                    <label for="" class="">Nombres</label>
                    <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombres" value="<?php echo $row['Nombres']  ?>">
                    <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                </div>
                <div class="col-md-3"></div>
            </div>

        </form>

    </div>
</body>

</html>