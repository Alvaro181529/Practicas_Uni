<?php

include("../bd.php");
$con=conectar();

$codigo=$_GET['id'];

$sql="DELETE FROM usuario  WHERE codigo='$codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../create.php");
    }
?>
