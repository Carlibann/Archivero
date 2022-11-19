<?php
    # SE CRAN VARIABLES PARA LA CONEXION CON LA BASE DE DATOS OPSIONAL

    $server='localhost';//SERVIDOR DE BASE DE DATOS
    $username='root';//USUARIO DE BASE DE DATOS
    $pass='';//CONTRASEÑA DE BASE DE DATOS, SI CONTIENE INGRESARLA
    $dbname='webcrackor';//NOMBRE DE LA BASE DE DATOS

    #SE ESTABLECE LA CONEXION CON LA BASE DE DATOS
    $conexion=mysqli_connect("$server","$username","$pass","$dbname");

    #SE USA UNA CONDICION PARA VER SI SE CONECTO ALA DB
    if ($conexion) {
        # SI ES CORRECTO ENTONCES MOSTRAR CONEXION ES EXITOSA 
        echo 'Conexion Exitosa';
    }else{
        #SI NO MOSTRARA ERROR EN LA CONEXION
        echo 'Error en la Conexion';

        return $conexion;
    }