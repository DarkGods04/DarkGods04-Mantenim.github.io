<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguimiento a reporte</title>
    <?php include ("../viewAdministrador/navigatorAdministrador.php"); ?>
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
        <h2>Seguimiento del reporte con código: 13</h2>

        <div>
            <table border="1">
                <thead>
                    <tr>
                        <th>Código activo</th>
                        <th>Fecha de atención</th>
                        <th>Activo</th>
                        <th>Ubicacion</th>
                        <th>Observaciones</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1234</td>
                        <td>23/9/2022</td>
                        <td>Aire acondicionado</td>
                        <td>Aula10</td>
                        <td>Se limpiaron las rejillas por donde sale el aire</td>
                        <td>En proceso</td>
                        <td>
                            <button>
                                <a href="mostrarEvidenciaReporte.php" style="text-decoration: none; color: blue;">Evidencias</a>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td>1234</td>
                        <td>27/9/2022</td>
                        <td>Aire acondicionado</td>
                        <td>Aula10</td>
                        <td>Se cambiaron fusibles que estaban quemados</td>
                        <td>Atendido</td>
                        <td>
                            <button>
                                <a href="mostrarEvidenciaReporte.php" style="text-decoration: none; color: blue;">Evidencias</a>
                            </button>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

</br></br></br></br></br>
        <center>
            <?php
            include '../viewAdministrador/footer.php';
            ?>
        </center>

    </div>
</body>

</html>