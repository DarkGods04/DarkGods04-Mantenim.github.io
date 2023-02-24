<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Reporte de activo</title>
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

    <div align="center">
        <form action="..//" method="POST">

            <h3>Registro de mantenimiento de activos</h3>

           
           
            <div>
                <label for="correo">Nombre de Activos</label>
                <input type="text" name="correo" placeholder="Ej: Aire">
            </div></br>
           
         
            <div>
                <label for="fechaHora">Fecha de mantenimiento </label>
                <input type="date" name="fecha"/>
            </div><br>


            <label for="anotaciones">Anotaciones de reporte </label>
            <div>
                <textarea name="anotaciones" rows="10" cols="40">Anotaciones de reporte</textarea>
            </div></br></br>


            <label for="adjuntar">Si es necesario ajuntar evidencias, usar este espacio.</label><br></br>
            <form name="formulario" method="post" action="/send.php" enctype="multipart/form-data">
                <input type="file" name="adjunto" accept=".pdf,.jpg,.png" multiple /><br></br>

            <button type="submit" name="btnEnviar" value="ok">Enviar</button>
        </form>
    </div>

</body>

</html>

<?php include("../viewAcademico/footer.php") ?>
