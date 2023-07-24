<?php
require_once '../models/estudiante.php';
$estudiantes = new Estudiantes();
?>
<?php
// $alumno = [
//     'nombre' => 'Alvaro',
//     'paterno' => 'Medrano',
//     'materno' => 'Perez',
//     'email' => 'Alvaro@gmail.com',
// ];
// $estudiantes->insertar($alumno);

$resultados = $estudiantes->consultar();
foreach ($resultados as $estudiante) {
    echo $estudiante['nombre'] . " " . $estudiante['paterno'] . " " . $estudiante['materno'] ."<br/>";
}

// $alumno = [
//     'nombre' => 'Herbert',
//     'paterno' => 'Medrano',
//     'materno' => 'Perez',
//     'email' => 'Alvaro@gmail.com',
// ];
// $estudiantes->actualizar($alumno);
$alumno=['email' => 'hyvjhyvhjv'];
$estudiantes->eliminar("todos",$alumno);