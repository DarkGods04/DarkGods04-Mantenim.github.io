

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Atender reporte </title>
    <?php include ("../viewInfraestructura/headerInfra.php")?>
</head>

<style type="text/css">
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
    }
</style>

<body>
<br><br><br><br>
<h1 style="font-size:35px;" >Área de infraestructura</h1>

    <div align="center">
        <form action="..//" method="POST">

            <h3>Registro de atención de activo</h3>

<!-- AQUI SERIA QUE ESTO SE CARGUE UNA VEZ DADA LA OPCION DE INGRESAR UNA NUEVA ATENCION-->

            <div>
                <label for="codigo">Código de Activo</label>
                <input type="text" name="codigo" placeholder="Ej: MT-234">
            </div>
            <div>
                <label for="correo">Nombre de Activo</label>
                <input type="text" name="correo" placeholder="Ej: Motoguadaña">
            </div>
            <div>
                <label for="marcaActivo">Marca de Activo</label>
                <input type="text" name="marcaActivo" placeholder="Ej: Makita">
            </div>
            <div>
                <label for="modeloActivo">Modelo de Activo</label>
                <input type="text" name="modeloActivo" placeholder="Ej: RBC1234UU2022">
            </div>
            <div>
                <label for="fechaHora">Fecha y hora de Atención: </label>
                <input type="date" name="fecha" />
                <input type="time" name="hora" /><br></br>
            </div>

            <label for="anotaciones">Anotaciones de reporte </label>
            <div>
                <textarea name="anotaciones" rows="10" cols="40">Anotaciones de reporte</textarea>
            </div>

            <label for="adjuntar">Si es necesario ajuntar evidencias, usar este espacio.</label><br></br>
            <form name="formulario" method="post" action="/send.php" enctype="multipart/form-data">
                <input type="file" name="adjunto" accept=".pdf,.jpg,.png" multiple /><br></br>
            </form>

            <button type="submit" name="btnEnviar" value="ok">Enviar</button>
        </form>
    </div>


    <footer class="pie_pagina">
     <hr class="solid">
    <h4>Copyright© 2022 Campus Sarapiquí. Todos los derechos reservados.<br>  
        Universidad Nacional de Costa Rica.</h4>
    <h5>Correo de la Universidad Nacional Campus Sarapiquí.</h5>
    <h5>Número de teléfono.</h5>
   
</footer>
</body>

</html>


