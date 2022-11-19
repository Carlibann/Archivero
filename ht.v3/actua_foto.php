<?php

    include_once("conexion.php");
    session_start();
    if(!isset($_SESSION['correo'])){

        header('location:index.php');
    }
    #FUNCION PARA VER DATOS DE USUARIO
    $id=$_SESSION['correo'];
    $consulta=mysqli_query($conexion,"SELECT * FROM registro WHERE correo='$id'");
    $valores=mysqli_fetch_array($consulta);
    $nombre=$valores['nombre'];
    $correo=$valores['correo'];
    $foto=$valores['foto'];
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stilo-login.css">
    <title>Document</title>
</head>
<body>
    
        <img src="<?php echo $foto ?>" alt="" class="img-actu">
        <form  class="row g-1" action="imagen.php" method="Post" enctype="multipart/form-data">
           
            <div class="col-md-5">
                <label class="form-label">Cargar Foto</label>
                <input class="form-control" type="file" name="foto" accept="image/.jpg, image/.png" id="foto" required>
            </div>
            <input class="btn" type="submit" name="actualizar"  value="actualizar">
            <a class="btn1" href="index.php">regresar</a>
            
           

        </form>
       
    
</body>
</html>