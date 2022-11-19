<?php
    include_once ("conexion.php");

    if(isset($_POST['actualizar'])){
        #DIRECTORIO DE SUBIDA.
        if(!is_dir('files')){
            mkdir('files',0777);
        }
       
            $foto=$_FILES['foto']['name'];
            $ruta=$_FILES['foto']['tmp_name'];
            $destino='files/'.$foto;
            copy($ruta,$destino);

            #TIPO DE IMAGEN ADMITIDA.
            $allowed_types=array('image/jpg','image/jpeg'.'image/png');
        if(!in_array($nametype, $allowed_types)){
            header('location:registrate.php');
        }
             
                 
            #INSERTAR DATOS EN LA TABLA
            $sql="UPDATE registro SET foto='$destino'";
            $resultado=mysqli_query($conexion, $sql);
      
        if ($resultado){
            #echo "<script>window.alert('conexion fallida');</script>";
            // header("location:index.php");
            header("location:index.php");
        
        } else {
        
            // echo "<script>alert('Ups.. Ocurrio un Error')</script>";
            header("location:actua_foto.php");
            
        }
     }

    
     
    
?>

