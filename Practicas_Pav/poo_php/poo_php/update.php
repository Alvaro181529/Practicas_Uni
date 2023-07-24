<?php
    include("persona.php");
    $persona=Persona::getById($_POST['Cod']);
    $persona->Nombres=$_POST['Nombres'];
    $persona->Apellidos=$_POST['Apellidos'];
    $persona->Carnet=$_POST['Carnet'];
    $persona->update();
    Header("Location: index.php");
?>