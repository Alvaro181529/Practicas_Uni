<?php
include_once("../bd/conexion.php");

    $con=conectar();

    $codigo=$_POST['Cod'];
    $carnet=$_POST['Carnet'];
    $nombres=$_POST['Nombres'];
    $apellidos=$_POST['Apellidos'];


    $sql="INSERT INTO persona VALUES('$codigo','$carnet','$apellidos','$nombres')";
    $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: ../persona.php");        
    }else {
    }
?>