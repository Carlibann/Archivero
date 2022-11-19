<?php 
    include('conexion.php');
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="alert.js"></script>
    <link rel="stylesheet" href="css/stilo-registrate.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">-->    
    <title>Nuevo | Registro</title>
</head>
<body>
    <div class="contenedor registro">
    <form  class="row g-1" action="INSERT.php" method="Post" enctype="multipart/form-data">
            <div class="col-md-5">
                <label for="inputName4" class="form-label">Nombre Producto</label>
                <input type="text" class="form-control" name="nombreproducto" id="InputName4" placeholder="Nombre" required>
            </div>

            <div class="col-md-5">
                <label for="inputApellido4" class="form-label">Precio</label>
                <input class="form-control" type="text" name="precio" id="InputApellido4" placeholder="Apellido" required>
            </div>

            <div class="col-md-5">
                <label class="form-label">Foto</label>
                <input class="form-control is-invalid" type="file" name="foto" id="floatingInputInvalid" placeholder="Example@example.com" required>
            </div>
            <input class="btn btn-primary mb-3" type="submit" name="registrar" value="Ingresar">
            <a href="index.php" class="regis">Regresar.</a>

        </form>

    </div> 
   
</body>

</html>