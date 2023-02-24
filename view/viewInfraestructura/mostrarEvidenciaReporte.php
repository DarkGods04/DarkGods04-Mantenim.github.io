<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evidencia de reporte</title>
    <?php include ("../viewInfraestructura/headerInfra.php"); ?>
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
        <h2>Detalles y evidencias del reporte</h2>

        <div>
            <fieldset style="width: 25%; height: 510px">
                <legend>Reporte código 13</legend>

                <div align="left">
                    <div>
                        <strong><label for="codigo">Código del activo: </label></strong>
                        <td>1234</td>
                    </div></br>

                    <div>
                        <strong><label for="area">Área del activo: </label></strong>
                        <td>Infraestructura</td>
                    </div></br>

                    <div>
                        <strong><label for="fecha">Fecha de atención: </label></strong>
                        <td>23/9/2022</td>
                    </div></br>

                    <div>
                        <strong><label for="nombre">Activo: </label></strong>
                        <td>Aire acondicionado</td>
                    </div></br>

                    <div>
                        <strong><label for="marca">Marca: </label></strong>
                        <td>Daikin</td>
                    </div></br>

                    <div>
                        <strong><label for="modelo">Modelo: </label></strong>
                        <td>Inverter</td>
                    </div></br>

                    <div>
                        <strong><label for="ubicacion">Ubicación: </label></strong>
                        <td>Aula 10</td>
                    </div></br>

                    <div>
                        <strong><label for="estado">Estado: </label></strong>
                        <td>En proceso</td>
                    </div></br>

                    <strong><label for="anotaciones">Anotaciones del reporte</label></strong>
                    <div>
                        <textarea name="anotaciones" style="width: 426px; height: 60px;">Se limpiaron las rejillas por donde sale el aire</textarea>
                    </div></br>

                    <div>
                        <strong><label for="archivos">Archivos adjuntos: </label></strong>
                        <td></td>
                    </div></br>

                </div>
            </fieldset>
        </div>


        <?php
        include '../viewAdministrador/footer.php';
        ?>

    </div>
</body>

</html>