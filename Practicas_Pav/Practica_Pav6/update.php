<?php
include("bd.php");
$con = conectar();

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$estatura = $_POST['estatura'];
$carnet = $_POST['carnet'];

$sql = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', edad='$edad',estatura='$estatura', carnet='$carnet' WHERE codigo ='$codigo'";
$query = mysqli_query($con, $sql);


if ($query) {
    Header("Location: create.php");
} else {
}
