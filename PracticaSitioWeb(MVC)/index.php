<?php
include_once('controllers/IndexController.php');
$precio_new = filter_input(INPUT_POST, 'precio');
$cantidad_new = filter_input(INPUT_POST, 'cantidad');
$inicio = new IndexController();
$inicio->inicio();
?>
<form method="post" class="form" id="formulario">
    <input type="number" step="0.01" placeholder="Precio" value="<?= $precio_new ?>" name="precio" id="precio">
    <input type="number" placeholder="Cantidad" name="cantidad" value="<?= $cantidad_new ?>" id="cantidad">
    <br>
    <button type="submit" name="calcular">Enviar</button>
</form>
<hr align="center" style="width: 50%; margin: 2px 20% 15px 25%;">
<section class="resultado">
    <?php
    if (isset($_POST['calcular'])) {
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        agregar($precio, $cantidad);
    } else {
        echo "error";
    }

    function agregar($cantidad, $precio)
    {
        $arrAgenda = array();

        if (isset($_POST['listaAgenda'])) {
            //separamos y almacenamos dentro de un array los items de la lista textArea
            $arrAgenda = explode("\n", trim($_POST['listaAgenda']));
        }
        if (!empty($cantidad) && !empty($precio)) {
            //valido que el nombre no exista
            if (!existeNombre($cantidad, $arrAgenda)) {
                $ut = $cantidad * $precio;
                //agrego al array los nuevos datos
                $arrAgenda[] = trim($cantidad) . '-' . trim($precio) . '-' . trim($ut);
                echo "TODO CORRECTO";
            } else {
                echo "EL NOMBRE YA EXISTE";
            }
        } else {
            echo "REVISE LOS CAMPOS";
        }
        dibujaTextArea($arrAgenda);
        dibujaTabla($arrAgenda);
    }
    function existeNombre($cantidad, $arrAgenda)
    {
        // $existe = false;
        // //recorreo el array
        // foreach ($arrAgenda as $item) {
        //     //separo el nombre del numero
        //     $res = explode("-", trim($item));
        //     //pregunto por el nombre
        //     if ($res[0] == $cantidad) {
        //         $existe = true;
        //     }
        // }
        // return $existe;
    }
    function dibujaTextArea($arrAgenda)
    {
        $txtArea = "<textarea style='display: none' name='listaAgenda' form='formulario'>";
        foreach ($arrAgenda as $item) {
            $txtArea .= trim($item) . "\n";
        }
        $txtArea .= "</textarea>";
        echo $txtArea;
    }

    function dibujaTabla($arrAgenda)
    {
        $table = "<table>";
        $table .= "<tr>";
        $table .= "<td>NOMBRE</td>";
        $table .= "<td>NUMERO</td>";
        $table .= "<td>TOTAL</td>";
        $table .= "</tr>";
        foreach ($arrAgenda as $item) {
            $res = explode("-", trim($item));
            $table .= "<tr>";
            $table .= "<td>$res[0]</td>";
            $table .= "<td>$res[1]</td>";
            $table .= "<td>$res[2]</td>";
            $table .= "</tr>";
        }
        $table .= "</table>";
        echo $table;
    }
    ?>
</section>
<!-- <article>
    <?php
    // $fp = fopen('sql.txt', 'r');
    // if (!$fp) {
    //     echo 'ERROR: No ha sido posible abrir ';
    //     exit;
    // }
    // $loop = 0 ;
    // while(!feof($fp)){
    //     $loop++;
    //     $line = fgets($fp);
    //     $field[$loop]= explode('|',$line);
    //     echo '
    //     Nombre:'.$field[$loop][0].'<br/>'.'
    //     Email:'.$field[$loop][1].'<br/>'.'
    //     Website:'.$field[$loop][2].'<br/>'.'
    //     Telefono:'.$field[$loop][3].'<br/>'.'
    //     ';
    //     echo'<br/>';
    //     // $fp++;
    // }
    // fclose($fp);
    ?>
</article> -->