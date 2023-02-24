<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis reportes</title>
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
        <h2>Mis reportes</h2>

        <label for="buscar">Buscar reporte</label>
        <input type="text" name="buscar" placeholder="Buscar Activo"><br></br>

        <table border="1">
            <tr>
                <th>Num</th>
                <th>Placa-activo</th>
                <th>Activo</th>
                <th>Marca</th>
                <th>Fecha reporte</th>
                <th>Ubicación</th>
                <th>Anotaciones</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
            <tr>
                <td>1</td>
                <td>1315</td>
                <td>Aire acondicionado</td>
                <td>Daikin</td>
                <td>10/9/2022</td>
                <td>Aula 10</td>
                <td>Hace ruidos extraños y no enfría</td>
                <td>Pendiente</td>
                <td>
                    <button>
                        <a href="listarReportesAdministrador.php?" style="text-decoration: none; color: blue;">Eliminar</a>
                    </button>
                </td>
            </tr>
        </table>
        <br><br>
        <button id="btnPrev">Prev.</button>
        <button id="1">1.</button>
        <button id="2">2.</button>
        <button id="3">3.</button>
        <button id="btnNext">Next.</button>


        <center>
            <?php
            include '../viewAdministrador/footer.php';
            ?>
        </center>
    </div>
</body>

</html>