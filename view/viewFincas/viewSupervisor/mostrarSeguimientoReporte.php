<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguimiento a reporte</title>
    <?php include ("header.php"); ?>
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
                        <td>Motoguadaña</td>
                        <td>Bodeha</td>
                        <td>Cambio de cable de iniciación</td>
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

        <br>
        <button>
            <a href="registrarAtencionReporteSupervisorFincas.php" style="text-decoration: none; color: blue;">Nueva atencion</a>
        </button>

</br></br></br></br></br>
        <center>
            <?php
            include 'footer.php';
            ?>
        </center>

    </div>
</body>

</html>