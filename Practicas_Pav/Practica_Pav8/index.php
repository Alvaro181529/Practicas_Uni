<?php
include("template/head.php");
include("acciones.php");
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";
switch ($accion) {
    case "Agregar":
        $auto = new auto;
        $auto->cilindro = $_POST['cilindro'];
        $auto->color = $_POST['color'];
        $auto->marca = $_POST['marca'];
        $auto->placa = $_POST['placa'];
        $auto->kilometraje = $_POST['kilometraje'];
        $auto->create();
        break;
        header("Location:index.php");
    case "Seleccionar":
        header("Location:table.php");
        break;
    case "Borrar":
        $auto = auto::getById($_POST['codigo']);
        $auto->delete();
        header("Location:index.php");
        break;
    default:
        break;
}
?>
<div class="container">
    <div class="row">

        <div class="col-4">
            <div class="card text-black-50">
                <div class="card-header">
                    Datos del Auto
                </div>

                <div class="card-body">
                    <form method="POST" accion="index.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="cilindro" class="form-label">Clindro:</label>
                            <input type="number" class="form-control may" required class="form-control" name="cilindro" value="" id="cilindro" placeholder="cilindro">
                        </div>
                        <div class="form-group">
                            <label for="color" class="form-label">Color:</label>
                            <input type="color" class="form-control may" required class="form-control" name="color" value="" id="color" placeholder="color">
                        </div>
                        <div class="form-group">
                            <label for="marca" class="form-label">Marca:</label>
                            <input type="text" class="form-control may" class="form-control" name="marca" value="" id="marca" placeholder="marca">
                        </div>
                        <div class="form-group">
                            <label for="placa" class="form-label">Placa:</label>
                            <input type="text" class="form-control may" required class="form-control" name="placa" value="" id="placa" placeholder="placa">
                        </div>
                        <div class="form-group">
                            <label for="kilometraje" class="form-label">Kilometraje:</label>
                            <input type="number" class="form-control may" required class="form-control" name="kilometraje" value="" id="kilometraje" placeholder="kilometraje">
                        </div>
                        <hr>
                        <div align="center" class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <button type="submit" name="accion" <?php echo ($accion == "Seleccionar") ? "disabled" : "" ?> value="Agregar" class="btn btn-success">Agregar</button> <br />
                        </div>
                        <br />
                    </form>
                </div>

            </div>
        </div>
        <div class="col-8">

            <?php $autos = Auto::getAll(); ?>
            <table class="table table-light table-striped table-hover table-bordered shad">
                <thead>
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Cilindro</th>
                        <th scope="col">Color</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Placa</th>
                        <th scope="col">Kilometraje</th>
                        <th>
                            <center>Acciones</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($autos as $auto) {
                    ?>
                        <tr>
                            <td><?php echo $auto->codigo ?></td>
                            <td><?php echo $auto->cilindro ?></td>
                            <td><input type="color" class="none" value="<?php echo $auto->color ?>"></td>
                            <td><?php echo $auto->marca ?></td>
                            <td><?php echo $auto->placa ?></td>
                            <td><?php echo $auto->kilometraje ?></td>
                            <td align="center">
                            <form method="POST" action="table.php" align="center">
                                    <input type="hidden" name="codigo" id="codigo" value="<?php echo $auto->codigo; ?>">
                                    <button type="submit" name="accion" value="Seleccionar" class="btn btn-outline-success table-light m-1">Seleccionar</button>
                                </form>
                                <form method="POST" align="center">
                                    <input type="hidden" name="codigo" id="codigo" value="<?php echo $auto->codigo; ?>">
                                    <button type="submit" name="accion" value="Borrar" class="btn btn-outline-danger table-light m-1">Eliminar</button>
                                </form>
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



<?php include("template/foot.php") ?>