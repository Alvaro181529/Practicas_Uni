<?php
$nombre_new = filter_input(INPUT_POST, 'nombre_new');
$telefono_new = filter_input(INPUT_POST, 'telefono_new');
?>
<!DOCTYPE html>

<!--

To change this license header, choose License Headers in Project Properties.

To change this template file, choose Tools | Templates

and open the template in the editor.

-->



<html>

<head>

    <title>Agenda</title>

    <style>
        form {

            width: 30%;

            padding: 10px;

            border: 3px solid #CCC;

            margin: 0 auto;

            border-radius: 10%;

            background: url("plasticc.jpg");

        }



        h2 {

            text-align: center;

        }

        p {

            font-size: 1.5rem;

        }



        #menu {

            text-align: center;

        }



        #menu label {

            width: 30%;

            display: block;

            float: left;

            margin: 5px 0 5px 45px;

            font-size: 1.2rem;

        }



        #menu input {

            padding: 5px;

            margin: 4px 0x;

            font-size: 1rem;

            margin: 0 0 20px -70px;

        }

        #menu input[type=submit] {

            display: block;

            width: 30%;

            margin: 2em auto;

        }

        #agenda {

            display: inline;

            width: 100%;

        }

        #agenda .titulos {

            display: flex;

            width: 100%;

            text-align: center;

        }

        #agenda div:first-child input {

            margin: 0 1em;

            border: 0px;

            font-weight: bold;

            width: 100%;

            text-align: center;

            display: flex;

            background: none;
        }

        #datos {

            width: 100%;

            text-align: center;

            display: flex;

        }

        #datos p {

            font-size: 1.5rem;

            width: 50%;

            display: flex;

            flex-direction: row;

            justify-content: center;

            align-items: center;

        }

        .warning {
            width: 80%;

            text-align: center;

            background-color: #ee7;

            border: 1px solid #ea2;

            padding: 4px 2.8em;
        }

        .noborder {

            border: none;

            background-color: transparent;

        }
    </style>

</head>

<body>

    <form id="formulario" method="post">
        <h2>AGENDA DE CONTACTOS</h2>
        <div id="menu">
            <label for="formNombre">
                Nombre:
            </label>
            <input id="formNombre" type="text" name="nombre_new" value="<?= $nombre_new ?>" placeholder="Ej: Marco Asensio" autofocus>
           <br/>
            <label for="formTelefono">
                Teléfono:
            </label>
            <input id="formTelefono" type="number" name="telefono_new" value="<?= $telefono_new ?>" placeholder="Ej: 612345678">
            <input name="btn_guardar" type="submit">
        </div>
        <div id="agenda">
            <div class="titulos">
                <input readonly value="Nombre">
                <input readonly value="Teléfono">
            </div>
            <hr>
            <?php
            //si se definio la variable btn_guardar (si se hizo clic)
            if (isset($_POST["btn_guardar"])) {
                $nombre = $_POST["nombre_new"];
                $telefono = $_POST["telefono_new"];
                //agrego
                agregar($nombre, $telefono);
            }
            function agregar($nombre, $telefono)
            {
                //nuevo array
                $arrAgenda = array();
                //si esta definida la variable listaAgenda (si existe el textArea con la lista)
                if (isset($_POST['listaAgenda'])) {
                    //separamos y almacenamos dentro de un array los items de la lista textArea
                    $arrAgenda = explode("\n", trim($_POST['listaAgenda']));
                }
                //valido que no esten vacios los campos
                if (!empty($nombre) && !empty($telefono)) {
                    //valido que el nombre no exista
                    if (!existeNombre($nombre, $arrAgenda)) {
                        //agrego al array los nuevos datos
                        $arrAgenda[] = trim($nombre) . '-' . trim($telefono);
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
            function existeNombre($nombre, $arrAgenda)
            {
                $existe = false;
                //recorreo el array
                foreach ($arrAgenda as $item) {
                    //separo el nombre del numero
                    $res = explode("-", trim($item));
                    //pregunto por el nombre
                    if ($res[0] == $nombre) {
                        $existe = true;
                    }
                }
                return $existe;
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
                $table .= "</tr>";
                foreach ($arrAgenda as $item) {
                    $res = explode("-", trim($item));
                    $table .= "<tr>";
                    $table .= "<td>$res[0]</td>";
                    $table .= "<td>$res[1]</td>";
                    $table .= "</tr>";
                }
                $table .= "</table>";
                echo $table;
            }
            ?>
        </div>
    </form>
</body>

</html>