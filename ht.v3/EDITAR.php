<?php 
    include('conexion.php');
     ##Funcion para ver registro crud EN EDITAR
    $id=$_GET['id'];
    include("conexion.php");
    $consulta="SELECT * FROM producto WHERE id='$id'";
    $resultado=mysqli_query($conexion, $consulta);
    $row=mysqli_fetch_assoc($resultado);
    

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
    <title>Edit | Registro</title>
</head>
<body>
    <div class="contenedor registro">
    <form  class="row g-1" action="update.php" method="Post" enctype="multipart/form-data">
            <div class="col-md-5">
                <label for="inputName4" class="form-label">Nombre Producto</label>
                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                <input type="text" class="form-control" name="nombreproducto" id="InputName4" placeholder="Nombre" value="<?php echo $row['nombreproducto'];?>" required>
            </div>

            <div class="col-md-5">
                <label for="inputApellido4" class="form-label">Precio</label>
                <input class="form-control" type="text" name="precio" id="InputApellido4" placeholder="Apellido" value="<?php echo $row['precio'];?>"required>
            </div>

            <div class="col-md-5">
                <label class="form-label">Foto</label>
                <input class="form-control is-invalid" type="file" name="foto" id="floatingInputInvalid" placeholder="Example@example.com" value="<?php echo $row['foto'];?>" required>
            </div>
            
            <input class="btn btn-primary mb-3" type="submit" name="actualiza" value="Acrualizar">
            <a href="index.php" class="regis">Regresar.</a>

        </form>

    </div> 
   
</body>

</html>