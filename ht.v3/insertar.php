<?php

    include_once ("conexion.php");
   
   
   if (isset($_POST['registrar'])){
    # code...
    if (strlen($_POST['nombre'])>= 1 && strlen($_POST['apellido'])>= 1 && strlen($_POST['correo'])>= 1 && strlen($_POST['telefono'])>= 1 && strlen($_POST['clave'])>= 1){

        $nombre=trim($_POST['nombre']);
        $apellido=trim($_POST['apellido']);
        $correo=trim($_POST['correo']);
        $telefono=trim($_POST['telefono']);
        $clave=trim($_POST['clave']);
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
        $sql="INSERT INTO registro(nombre, apellido, correo, telefono, clave, foto)VALUES('$nombre', '$apellido', '$correo', '$telefono', '$clave','$destino')";
        $resultado=mysqli_query($conexion, $sql);
      
        if ($resultado){
            #echo "<script>window.alert('conexion fallida');</script>";
            header("location:login.php");
        
        } else {
        
        header("location:registrate.php");
        #echo "<script>alert('Ups.. Ocurrio un Error')</script>";
        }
    
    }   
    
}
   

?>