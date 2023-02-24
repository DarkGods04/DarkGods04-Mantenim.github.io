<?php include("../viewSupervisor/header.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver reportes realizados </title>
</head>
<style type="text/css">
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
    }
</style>

<body>
<br><br><br><br>

    <div align="center">
        <h2>Global de reportes del area de fincas</h2>

        <div>
            <label for="estadoReportes">Estado de reportes</label>
            <select name="estadoReportes">
                <option value="" selected disabled hidden>Estado de reportes</option>
                <option value="">Pendiente</option>
                <option value="">En proceso</option>
                <option value="">Atendido</option>
            </select></br></br>
        </div>

        <div>
            <table border="1">
                <thead>
                    <tr>
                        <th>Num</th>
                        <th>Código reporte</th>
                        <th>Código activo</th>
                        <th>Activo</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Ubicacion</th>
                        <th>Fecha de reporte</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>13</td>
                        <td>1234</td>
                        <td>Aire acondicionado</td>
                        <td>Daikin</td>
                        <td>Inverter</td>
                        <td>Aula10</td>
                        <td>10/9/2022</td>
                        <td>Pendiente</td>
                        <td>
                            <button>
                                <a href="mostrarSeguimientoReporte.php" style="text-decoration: none; color: blue;">Seguimiento</a>
                            </button>
                            <!--
                            <button>
                                <a href="mostrarEvidenciaReporte.php" style="text-decoration: none; color: blue;">Evidencias</a>
                            </button>
                            -->
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <br><br>
        <button id="btnPrev">Prev.</button>
        <button id="1">1.</button>
        <button id="2">2.</button>
        <button id="3">3.</button>
        <button id="btnNext">Next.</button>

    </div>
</body>


</html>


<?php include("../viewSupervisor/footer.php") ?>