<?php
include("template/head.php");
include("bd.php");
$con = conectar();
$sql = "SELECT *  FROM usuario";
$query = mysqli_query($con, $sql);
?>

<h2 class="intro" align="center">Usuarios registrados</h2>

<table class="table table-light table-striped table-bordered shad">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Edad</th>
            <th scope="col">Estatura</th>
            <th scope="col">Carnet</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $row['nombre'] ?></td>
                <td><?php echo $row['apellido'] ?></td>
                <td><?php echo $row['edad'] ?></td>
                <td><?php echo $row['estatura'] ?></td>
                <td><?php echo $row['carnet'] ?></td> 
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php include("template/footer.php"); ?>