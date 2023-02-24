<?php include("../viewFuncionario/header.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activos registrados del área de fincas </title>
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

    <h1>Activos registrados del área de fincas </h1>

    <label for="buscar">Buscar Activo</label>
    <input type="text" name="buscar" placeholder="Buscar Activo"><br></br>

    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Num de Serie</th>
            <th>Fecha Ingreso</th>
            <th>Ubicación</th>
            <th>Estado</th>
            <th>Observaciones</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <br><br>
    <button id="btnPrev">Prev.</button>
    <button id="1">1.</button>
    <button id="2">2.</button>
    <button id="3">3.</button>
    <button id="btnNext">Next.</button>
</body>


</html>


<?php include("../viewFuncionario/footer.php") ?>