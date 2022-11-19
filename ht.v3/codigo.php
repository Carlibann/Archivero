<?php

    require('conexion.php');

    $sql="SELECT producto FROM codigo_barra";
    $resultado=$conexion->query($sql);

    while($row=$resultado->fetch_assoc()){
        ?>


        
        <img src="barcode.php?text=<?php echo $row['codigo_barra'];?>&size=50&orientation=horizontal&codetype=code39&print=true&sizefactor=1" alt="">
        <br>
       
   <?php }?>

   
   <a href="barcode.php?text=0123456789&size=50&orientation=vertical">Generar</a>




    