<?php
include("template/head.php");
include("bd.php");

$con = conectar();
$id = $_GET['id'];

$sql = "SELECT * FROM usuario WHERE codigo='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="card" style="margin-top: -10px;">
            <div class="card-header">
                Actualizar
            </div>
            <div class="card-body shad">
                <form action="update.php" method="POST">
                    <label>Codigo:</label>
                    <input type="text" readonly  name="codigo" class="form-control mb-2" value="<?php echo $row['codigo'] ?>" >
                    <label>Nombre:</label>
                    <input type="text" name="nombre" class="form-control mb-2" value="<?php echo $row['nombre'] ?>">
                    <label>Apellido:</label>
                    <input type="text" name="apellido" class="form-control mb-2" value="<?php echo $row['apellido'] ?>">
                    <label>Edad:</label>
                    <input type="text" name="edad" class="form-control mb-2" value="<?php echo $row['edad'] ?>">
                    <label>Estatura:</label>
                    <input type="text" name="estatura" class="form-control mb-2" value="<?php echo $row['estatura'] ?>">
                    <label>Carnet:</label>
                    <input type="text" name="carnet" class="form-control mb-2" value="<?php echo $row['carnet'] ?>">
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
    <div class="col-4"></div>

</div>

<?php include("template/footer.php"); ?>