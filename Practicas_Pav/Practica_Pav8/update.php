    <?php   
    include("acciones.php");
        $auto = auto::getById($_POST['codigo']);
        $auto->cilindro = $_POST['cilindro'];
        $auto->color = $_POST['color'];
        $auto->marca = $_POST['marca'];
        $auto->placa = $_POST['placa'];
        $auto->kilometraje = $_POST['kilometraje'];
        $auto->update();
        header("Location:index.php");
    ?>