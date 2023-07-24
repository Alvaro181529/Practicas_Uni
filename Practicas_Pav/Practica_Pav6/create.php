<?php
include("template/head.php");
include("bd.php");
$con = conectar();
$sql = "SELECT *  FROM usuario";
$query = mysqli_query($con, $sql);
?>
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                Crear Usuario
            </div>
            <div class="card-body shad">
                <form action="actualizar.php" method="POST">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="form-control mb-3">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" class="form-control mb-3">
                    <label for="edad">Edad:</label>
                    <input type="text" id="edad" name="edad" class="form-control mb-3">
                    <label for="estatura">Estatura:</label>
                    <input type="text" id="estatura" name="estatura" class="form-control mb-3">
                    <label for="carnet">Carnet:</label>
                    <input type="text" id="carnet" name="carnet" class="form-control mb-3">
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    <div class="col-8">
        <table class="table table-light table-striped table-hover table-bordered shad">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Estatura</th>
                    <th scope="col">Carnet</th>
                    <th>
                        <center>Acciones</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $row['codigo'] ?></td>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['apellido'] ?></td>
                        <td><?php echo $row['edad'] ?></td>
                        <td><?php echo $row['estatura'] ?></td>
                        <td><?php echo $row['carnet'] ?></td>
                        <td align="center"><a href="actualizar.php?id=<?php echo $row['codigo'] ?>" class="btn btn-outline-success table-light mar">Actualizar</a>
                            <a href="cruds/eliminar.php?id=<?php echo $row['codigo'] ?>" class="btn btn-outline-danger table-light mar">Eliminar</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php include("template/footer.php"); ?>