<?php
    $id=$_GET['id'];
    include("conexion.php");
    $consulta="SELECT * FROM registro WHERE id='$id'";
    $resultado=mysqli_query($conexion, $consulta);
    $usuario=mysqli_fetch_assoc($resultado);
   

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
    <form  class="row g-1" action="funciones.php" method="Post" enctype="multipart/form-data">
            <div class="col-md-5">
                <label for="inputName4" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="InputName4" placeholder="Nombre" value="<?php echo $usuario['nombre'];?>" required>
            </div>

            <div class="col-md-5">
                <label for="inputApellido4" class="form-label">Apellido</label>
                <input class="form-control" type="text" name="apellido" id="InputApellido4" placeholder="Apellido" value="<?php echo $usuario['apellido'];?>"required>
            </div>

            <div class="col-md-5">
                <label class="form-label">Correo</label>
                <input class="form-control is-invalid" type="email" name="correo" id="floatingInputInvalid" placeholder="Example@example.com" value="<?php echo $usuario['correo'];?>" required>
            </div>
            <div class="col-md-5">
                <label class="form-label">Telefono</label>
                <input class="form-control" type="text" name="telefono" accept=".#" id="" value="<?php echo $usuario['telefono'];?>" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Clave</label>
                <input class="form-control" type="password" placeholder="Password" name="clave" id="" value="<?php echo $usuario['clave'];?>" required>
                <input type="hidden" name="accion" value="editar_registro">
                <input type="hidden" name="id" <?php echo $id; ?>>
            </div>

            <input class="btn btn-primary mb-3" type="submit" name="registrar" value="registrarse">
            <a href="login.php" class="regis">Ya tengo cuenta.</a>

        </form>

    </div> 
   
</body>

</html>