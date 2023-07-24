<?php 
    include("persona.php");
    $persona=Persona::getById($_GET['id']);
 
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 bg-light p-3">
                            <h2 class="bg-primary p-3" style="border-radius: 5px;">Actualizar datos</h2>
                                <input type="hidden" name="Cod" value="<?php echo $persona->Cod  ?>">
                                <label for="" class="">Carnet</label>
                                <input type="text" class="form-control mb-3" name="Carnet" placeholder="Carnet" value="<?php echo $persona->Carnet  ?>">
                                <label for="" class="">Apellidos</label>
                                <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos" value="<?php echo $persona->Apellidos  ?>">
                                <label for="" class="">Nombres</label>
                                <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombres" value="<?php echo $persona->Nombres  ?>">
                                
                                
                                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                            </div>
                            <div class="col-md-3"></div>
                        
                        </div>
                             
                    </form>
                    
                </div>
    </body>
</html>