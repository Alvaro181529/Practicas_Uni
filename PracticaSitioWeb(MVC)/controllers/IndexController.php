<?php
// require_once('models/inicio.php');
class IndexController
{
    public function inicio()
    {
        // $precio_new = filter_input(INPUT_POST, 'precio');
        // $cantidad_new = filter_input(INPUT_POST, 'cantidad');
        include_once('./views/template/head.php');
        include_once('./views/template/foot.php');
    }

    // public function calculo($precio, $cantidad)
    // {
    //     // if ($datos['calcular'] && $datos['precio'] != "") {

    //     agregar($cantidad, $precio, $res);

    //     // }
    // }
    // public function agregar($cantidad, $precio)
    // {
    //     $arrAgenda = array();

    //     if (isset($_POST['listaAgenda'])) {
    //         //separamos y almacenamos dentro de un array los items de la lista textArea
    //         $arrAgenda = explode("\n", trim($_POST['listaAgenda']));
    //     }
    //     if (!empty($cantidad) && !empty($precio)) {
    //         //valido que el nombre no exista
    //         if (!existeNombre($cantidad, $arrAgenda)) {
    //             $ut = $cantidad * $precio;
    //             //agrego al array los nuevos datos
    //             $arrAgenda[] = trim($cantidad) . '-' . trim($precio) . '-' . trim($ut);
    //             echo "TODO CORRECTO";
    //         } else {
    //             echo "EL NOMBRE YA EXISTE";
    //         }
    //     } else {
    //         echo "REVISE LOS CAMPOS";
    //     }
    //     dibujaTextArea($arrAgenda);
    //     dibujaTabla($arrAgenda);
    // }
    // public function existeNombre($cantidad, $arrAgenda)
    // {
    //     $existe = false;
    //     //recorreo el array
    //     foreach ($arrAgenda as $item) {
    //         //separo el nombre del numero
    //         $res = explode("-", trim($item));
    //         //pregunto por el nombre
    //         if ($res[0] == $cantidad) {
    //             $existe = true;
    //         }
    //     }
    //     return $existe;
    // }
    // public function dibujaTextArea($arrAgenda)
    // {
    //     $txtArea = "<textarea style='display: none' name='listaAgenda' form='formulario'>";
    //     foreach ($arrAgenda as $item) {
    //         $txtArea .= trim($item) . "\n";
    //     }
    //     $txtArea .= "</textarea>";
    //     echo $txtArea;
    // }

    // public function dibujaTabla($arrAgenda)
    // {
    //     $table = "<table>";
    //     $table .= "<tr>";
    //     $table .= "<td>NOMBRE</td>";
    //     $table .= "<td>NUMERO</td>";
    //     $table .= "<td>TOTAL</td>";
    //     $table .= "</tr>";
    //     foreach ($arrAgenda as $item) {
    //         $res = explode("-", trim($item));
    //         $table .= "<tr>";
    //         $table .= "<td>$res[0]</td>";
    //         $table .= "<td>$res[1]</td>";
    //         $table .= "<td>$res[2]</td>";
    //         $table .= "</tr>";
    //     }
    //     $table .= "</table>";
    //     echo $table;
    // }
}
