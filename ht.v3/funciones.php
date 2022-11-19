<?php

    if(isset($_POST['accion'])){
        switch($_POST['accion']){
            //Casos de registro
            case 'editar registro';
                editar_registro();
                break;
            case 'eliminar_registro';
                eliminar_registro();
                break;
        }
        function editar_registro(){
            include("conexion.php");
            extract($_POST);
            $sql="UPDATE registrar SET nombre='$nombre', apellido='$apellido', correo='$correo', telefono='$telefono', clave='$clave' WHERE id='$id')";
            mysqli_query($conexion, $sql);

            header("location:index.php");
        }
        
        
    }