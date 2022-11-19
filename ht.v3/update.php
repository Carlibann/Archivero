<?php 
    include("conexion.php");
        $id=$_POST['id'];
        $nombreproducto=$_POST['nombreproducto'];
        $precio=$_POST['precio'];
        ###foto###
        $foto=$_FILES['foto']['name'];
        $ruta=$_FILES['foto']['tmp_name'];
        $destino='produc/'.$foto;
        copy($ruta,$destino);
  
        #Actualizar DATOS EN LA TABLA
        $sql="UPDATE producto SET nombreproducto= '$nombreproducto', precio='$precio', foto='$destino' WHERE id='$id'";
        $respuesta=mysqli_query($conexion, $sql);       
        
        if($respuesta){
            header ("location:index.php");
        }

?> 