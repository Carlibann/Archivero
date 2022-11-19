<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="qr/stilo.css">
    <title>Crear| QR</title>
</head>
<body>
    <form action="qr/insert.php" name="contenido" method="post">
       
        <div class="borde">
        <h1>GENERADOR DE QR</h1>
        <label for="">NOMBRE1</label>
        <input type="text" name="producto" id="" required>

        <label for="">NOMBRE2</label>
        <input type="text" name="precio" id="" required>
        
        <button type="submit" name="generar" >Generar</button>

    </form>
    <br>
    <!-- <img src="qr/qrr/qrscan.png" /> -->
    </div>
    <?php
        include "qr/insert.php";
    ?>
  
</body>
</html>