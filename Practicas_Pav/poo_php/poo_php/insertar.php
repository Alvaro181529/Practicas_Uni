<?php
    include("persona.php");
    $persona= new Persona;
    $persona->Apellidos=$_POST['Apellidos'];
    $persona->Nombres=$_POST['Nombres'];
    $persona->Carnet=$_POST['Carnet'];
    $persona->create();
    Header("Location: index.php");    
?>