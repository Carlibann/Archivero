<?php 
    #SI SEPRECIONA EL BOTTON GENERAR EN TONCES
    if(isset($_POST['generar'])){

        #SE CREAR LAS VARIABLES QUE CAPTURARAN LOS DATOS INGRESADOR POR EL USUARIO
        $contenido=$_POST['producto']."\n";//VARIABLE MAS NOMBRE ASIGNADO EN NAME DE FORMULARIO CAMPO PRODUCTO
        $contenido.=$_POST['precio']; //VARIABLE MAS NOMBRE ASIGNADO EN NAME DEL FORMULARIO CAMPO PRECIO
                                        // #PARA MANDARLOS DATOS A GUAR DAR EN EL QR SE TIENE QUE CONCATENAR

        include '../phpqrcode/qrlib.php';//LIBRERIA DE QR 
        #SINO EXISTE EL DIRECTORIO 'qr' ENTOCES CREALO
        if (!file_exists('qrr')) {
            #CREAR DIRECTORIO ...
            mkdir('qrr');
        }
        
        $ruta='qrr/'.'qrscan.png';//RUTA DONDE SE GUARDARA
        $nivel='H';//NIVEL DE INTENSIDAD// L M Q H
        $tama=15;//TAMAÑO DEL CODIGO// 33 * 10 =330PX
        $tamfranj=5;//TAMAÑO DE LA FRANJA

        #ENLACE A DIRECTORIO QR
        QRcode::png($contenido,$ruta,$nivel,$tama,$tamfranj);
        echo '<img src="'.$ruta.'" />';//IMPRIME IMAGEN
        // echo ".$contenido.";//IMPRIME CONTENIDO
        // header("location:../genera.php");
    }


