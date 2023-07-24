<?php
include_once("../bd/conexion.php");

$con = conectar();

$codigo = $_POST['Cod'];
$carnet = $_POST['Carnet'];
$nombres = $_POST['Nombres'];
$apellidos = $_POST['Apellidos'];

$sql = "UPDATE persona SET  Carnet='$carnet',nombres='$nombres',apellidos='$apellidos' WHERE Cod='$codigo'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: ../persona.php");
}
