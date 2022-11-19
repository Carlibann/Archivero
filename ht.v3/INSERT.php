<?php 
    include('conexion.php');
    if (isset($_POST['registrar'])){
    $nombreproducto=$_POST['nombreproducto'];
    $precio=$_POST['precio'];

    ###INSERTAR FOTO ####
     #DIRECTORIO DE SUBIDA.
     if(!is_dir('produc')){
        mkdir('produc',0777);
    }
    $foto=$_FILES['foto']['name'];
    $ruta=$_FILES['foto']['tmp_name'];
    $destino='produc/'.$foto;
    copy($ruta,$destino);

    ###INSERTAR EN DB####
    $sql="INSERT INTO producto(nombreproducto, precio, foto)Values('$nombreproducto','$precio','$destino')";
    $respuesta=mysqli_query($conexion, $sql);
    
    if($respuesta){

        header("location:index.php");
    }
}