<?php
include_once("../bd/conexion.php");

$con=conectar();

$codigo=$_GET['id'];

$sql="DELETE FROM persona  WHERE Cod='$codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../persona.php");
    }
?>
