<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de activos</title>
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
        <h2>Activos registrados</h2>


        <label for="areaActivo">Área de activos</label>
        <select name="areaActivo">
            <option value="" selected disabled hidden>Área de activo</option>
            <option value="">Infraestructura</option>
            <option value="">Tecnologías</option>
            <option value="">Fincas</option>
        </select></br></br>

        <div>
            <table border="1" align="center">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Num de serie</th>
                        <th>Fecha registro</th>
                        <th>Ubicación</th>
                        <th>Observaciones</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1234</td>
                        <td>Aire acondicionado</td>
                        <td>Daikin</td>
                        <td>Inverter</td>
                        <td>D415A12RT34</td>
                        <td>10/9/2020</td>
                        <td>Aula 10</td>
                        <td>Garatía hasta el 9/9/2022</td>
                        <td>
                            <button>
                                <a href="modificarActivo.php" style="text-decoration: none; color: blue;">Modificar</a>
                            </button>
                            <button>
                                <a href="listarActivos.php?" style="text-decoration: none; color: blue;">Eliminar</a>
                            </button>
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

        <center>
            <?php
            include '../viewAdministrador/footer.php';
            ?>
        </center>
</body>

</html>