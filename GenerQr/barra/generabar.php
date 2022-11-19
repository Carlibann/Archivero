<?php
    #VARIABLES PARA ESTABLECER CONEXION CON LA BASE DE DATOS
    $server='localhost';//SERVIDDOR LOCAL DE BASE DE DATOS
    $username='root';//USUARIO DE BASE DE DATOS
    $pass='';//CLAVE DE BASE DE DATO
    $dbname='webcrackor';//NOMBRE DE LA BASE DE DATO

    #ESTABLECER CONEXION CON LA BASE DE DATOS
    $conexion=mysqli_connect("$server","$username","$pass","$dbname");

    #SI SE PRECIONA EL BOTTON GENERAR 
    if (isset($_POST['generar'])) {
        # CAPTURA LOS DATOS...
        $producto=$_POST['producto'];
        
        #SE INSERTAN EN BASE DE DATOS LOS DATOS OPTENIDOS
        $sql="INSERT INTO producto (nombreproducto)VALUES('$producto')";
        $result=mysqli_query($conexion,$sql);//CONSULTA
        #SI SE EL RESULT ES CORRETO
        if($result){
            #MOSTRAR DATOS ALMACENADOS
            echo 'Datos almacenados';
        }else{
            #SINO MOSTRAR NO SE GUARDARON LOS DATOS
            echo 'No se guardaron los datos';
        }

        #SE DE CLARA VARIABLE PARA OPTENER EL ULTIMO ID AGREGADO
        $id=mysqli_insert_id($conexion);//SE AGREGA LA CONEXION PARA OBTENER EL RESULTADO
        $codigo=$id.date('is');//FUCION DE ID COM MILISEGUNDOS

        #SE ACTUALIZAN LOS DATOS PARA CODIGO
        $sql="UPDATE producto SET codigo_barra='$codigo' WHERE id='$id'";
        mysqli_query($conexion,$sql);

        header("location:../codebarra.php");


    }