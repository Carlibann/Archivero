<?php

    include_once ('conexion.php');
    session_start();

    if (!isset($_SESSION['correo']))
    {
        header('location:registrate.php');
    }
    #FUNCION PARA VER DATOS DE USUARIO
    $id=$_SESSION['correo'];
    $consulta=mysqli_query($conexion,"SELECT * FROM registro WHERE correo='$id'");
    $valores=mysqli_fetch_array($consulta);
    $nombre=$valores['nombre'];
    $correo=$valores['correo'];
    $foto=$valores['foto'];

    ##Funcion para ver registro crud
    $sql="SELECT * FROM producto";
    $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="tabla.css">
    <!-- <link rel="stylesheet" href="css/query.css"> -->
    <!-- KIT DE FONTAWESOME -->
    <script src="https://kit.fontawesome.com/9e396b4e1a.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>HOME</title>
    
</head>
<body >
    <div class="menu">
        <header>
            <div class="info-user">
                <div class="imagen">

                    <img src="<?php echo $foto ?>" alt="" width="80" class="fotoperf">
                    <a href="actua_foto.php"><i class="fa-solid fa-camera" style="color:white;font-size:20px;" ></i></a>
                </div>


                    <h5 class="name"><?php echo $nombre ?></h5> 
                    <h5 class="correo"><?php echo $correo ?></h5>
            </div>
            <nav>
                <ul>
                    <li><a href="cerrar.php"><i class="fa-solid fa-arrow-right-from-bracket" style="color:white;font-size:20px;" ></i>Cerrar sesión </a></li>
                </ul>
            </nav>
           
            
        </header> 
    </div>
    
    <a href="nuevo-regis.php" class="btn btn-success">Nuevo Registro</a> 

    <div class="crud">
    
    <table class="table">   
  <thead>
    <tr>
      <th>#</th>
      <th>Nombre Producto</th>
      <th>Precio</th>
      <th>Foto</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody><?php ##FUNCION PARA MOSTRAR DATOS EN LA TABLA
           
            while($row=mysqli_fetch_array($query)){
                
        ?> 
    <tr>
      <th ><?php echo $row['id'] ?></th>
      <td><?php echo $row['nombreproducto'] ?></td>
      <td><?php echo $row['precio'] ?></td>
      <td ><img src="<?php echo $row['foto'] ?>" alt="" width="80" ></td>
      <td><a class="btn btn-primary" href="EDITAR.php?id=<?php echo $row['id']?>">Editar</a></td>
      <td><a  class="btn btn-danger" href="borrar.php?id=<?php echo $row['id'];?>">Eliminar</a></td> 
    </tr>
    <?php  } ?>     
  </tbody>
  
</table>

    </div>  
</body>
</html>