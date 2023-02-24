<?php include("../viewSupervisor/header.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar funcionarios</title>
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

    <h1>Personal del área de fincas</h1>

    <label for="buscar">Buscar funcionario</label>
    <input type="text" name="buscar" placeholder="Buscar funcionario"><br></br>

    <table border="1">
        <tr>
            <th>Num</th>
            <th>Nombre Completo</th>
            <th>Num. Identificación</th>
            <th>Teléfono</th>
            <th>Correo</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>


</html>


<?php include("../viewSupervisor/footer.php") ?>