<?php 
    include("conexion.php");

    $id=$_GET['id'];
    
    $sql="DELETE FROM producto WHERE id='$id'";
    $resultado=mysqli_query($conexion, $sql);
        if($resultado){
            header("location:index.php");
              
        }
  
        
?> 