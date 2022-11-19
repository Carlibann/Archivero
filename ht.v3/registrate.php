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
    <link rel="stylesheet" href="css/stilo-registrate.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">-->    
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LeeBAwjAAAAAP-LOhBhJp8xLYkmdYQ7VAb7sK64"></script>
    <title>Login|Isl</title>
</head>
<body>
<script>
grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('6LeeBAwjAAAAAP-LOhBhJp8xLYkmdYQ7VAb7sK64', {action: 'login'}).then(function(token) {
       ...
    });
});
</script>
    <div class="contenedor registro">
    <form  class="row g-1" action="insertar.php" method="Post" enctype="multipart/form-data">
            <div class="col-md-5">
                <label for="inputName4" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="InputName4" placeholder="Nombre" required>
            </div>

            <div class="col-md-5">
                <label for="inputApellido4" class="form-label">Apellido</label>
                <input class="form-control" type="text" name="apellido" id="InputApellido4" placeholder="Apellido" required>
            </div>

            <div class="col-md-5">
                <label class="form-label">Correo</label>
                <input class="form-control is-invalid" type="email" name="correo" id="floatingInputInvalid" placeholder="Example@example.com" required>
            </div>
            <div class="col-md-5">
                <label class="form-label">Telefono</label>
                <input class="form-control" type="text" name="telefono" accept=".#" id="" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Clave</label>
                <input class="form-control" type="password" placeholder="Password" name="clave" id="" required>
            </div>

            <div class="col-md-5">
                <label class="form-label">Cargar Foto</label>
                <input class="form-control" type="file" name="foto" accept="image/.jpg, image/.png" id="foto" required>
            </div>
            <div class="g-recaptcha" data-sitekey="6LeeBAwjAAAAAP-LOhBhJp8xLYkmdYQ7VAb7sK64" data-callback="correctCaptcha"></div>
            <input class="btn btn-primary mb-3" type="submit" name="registrar" value="registrarse">
            <a href="login.php" class="regis">Ya tengo cuenta.</a>

        </form>

    </div> 
   
</body>

</html>