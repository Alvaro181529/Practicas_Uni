<?php
include("template/head.php");
include("acciones.php");
$auto = auto::getById($_POST['codigo']);
?>
<form action="update.php" method="post">
    <div class=" container card text-black-50">
        <div class="card-header">
            Actualizar
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="codigo" class="form-label">Codigo:</label>
                <input type="hiden" class="form-control may" required readonly class="form-control" name="codigo" value="<?php echo $auto->codigo ?>" id="codigo" placeholder="codigo">
            </div>
            <div class="form-group">
                <label for="cilindro" class="form-label">Clindro:</label>
                <input type="number" class="form-control may" required class="form-control" name="cilindro" value="<?php echo $auto->cilindro ?>" id="cilindro" placeholder="cilindro">
            </div>
            <div class="form-group">
                <label for="color" class="form-label">Color:</label>
                <input type="color" class="form-control may" required class="form-control" name="color" value="<?php echo $auto->color ?>" id="color" placeholder="color">
            </div>
            <div class="form-group">
                <label for="marca" class="form-label">Marca:</label>
                <input type="text" class="form-control may" class="form-control" name="marca" value="<?php echo $auto->marca ?>" id="marca" placeholder="marca">
            </div>
            <div class="form-group">
                <label for="placa" class="form-label">Placa:</label>
                <input type="text" class="form-control may" required class="form-control" name="placa" value="<?php echo $auto->placa ?>" id="placa" placeholder="placa">
            </div>
            <div class="form-group">
                <label for="kilometraje" class="form-label">kilometraje:</label>
                <input type="number" class="form-control may" required class="form-control" name="kilometraje" value="<?php echo $auto->kilometraje ?>" id="kilometraje" placeholder="kilometraje">
            </div>
            <hr>
                <button type="submit" name="accion" value="modificar" class="btn btn-success">Modificar</button> <br />
            <br />
        </div>
</form>


</div>
<?php include("template/foot.php") ?>