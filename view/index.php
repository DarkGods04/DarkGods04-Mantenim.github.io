<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
</head>

<body>
    <center>
    <div>
        <div>
            <button style="position:relative; left:1400px; top:2px; background-color: lightgray;">
                <a href="logueo.php" style="width: 200px; height: 50px; font-size: 175%; text-decoration: none; color: black;">Iniciar sesión</a>
            </button>
        </div>

        <h1 style="color: maroon;">Sistema Mantenimiento</h1>
    </div>
    <br>

    <form  method="POST" enctype="multipart/form-data" action="../business/logueoAccion.php">
        <div>
            Correo</br>
            <input class="tamanio2" type="text" name="identificacion" placeholder="Correo institucional" required></br>
        </div>
        <div>
            Contraseña</br>
            <input class="tamanio2" type="password" name="Contrasena" placeholder="Contraseña" required></br></br>
        </div>

        <a><input type="submit" name="logueo" id="logueo" value="logueo"></a></br></br>
        <div>
            <a href="recuperarContra.php" style="text-decoration: none; color: blue;">¿Olvidó su contraseña?</a>
        </div>
    </form>
    </center>
</body>

</html>