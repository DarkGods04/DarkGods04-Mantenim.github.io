<?php include("../viewFuncionario/header.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atender reporte </title>
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

            <h3>Registro de atención de activo</h3>

            <div>
                <label for="buscar">Buscar Activo</label>
                <input type="text" name="buscar" placeholder="Search"><br></br>
            </div>
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
</body>

</html>


<?php include("../viewFuncionario/footer.php") ?>