<?php
echo "<h2>Conexion con la base de datos</h2>";
require_once 'lib/DB.php';
$conectar = new DB();
$conectar->conectar();
if ($conectar == true) {
    echo "Esta conectado";
}
