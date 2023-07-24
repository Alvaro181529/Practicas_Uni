<?php
    include("persona.php");
    $persona=Persona::getById($_GET['id']);
    $persona->delete();
    Header("Location: index.php");    
?>