<?php

    include_once("conexion.php");
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="alert.js"></script>
    <link rel="stylesheet" href="css/stilo-login.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>    
    <title>Login|Isl</title>
</head>
<body>
    <div class="contenedor">
        <form class="row g-2" action="validar.php" method="Post">
        <div class="col-md-8">
                <label class="form-label">Correo</label>
                <input class="form-control is-invalid" type="email" name="correo" id="floatingInputInvalid" placeholder="Example@example.com" required>
            </div>
            
            <div class="col-md-8">
                <label class="form-label">Clave</label>
                <input class="form-control" type="password" placeholder="Password" name="clave" id="" required>
            </div>

            
            <a href="index.php"><input class="btn btn-primary mb-3" type="submit" name="registrar" value="Iniciar Sesión"></a>
            <a href="registrate.php" class="regist">Crear cuenta</a>
           

        </form>
    </div>
</body>

</html>