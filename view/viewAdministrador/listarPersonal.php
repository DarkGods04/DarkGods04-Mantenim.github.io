<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de personal</title>
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
        <h2>Personal registrado</h2>


        <label for="areaActivo">Tipo de personal</label>
        <select name="areaActivo">
            <option value="" selected disabled hidden>Departamento</option>
            <option value="">Académico</option>
            <option value="">Funcionario administrativo</option>
            <option value="">Funcionario de infraestructura</option>
            <option value="">Funcionario de tecnologías</option>
            <option value="">Supervisor de fincas</option>
            <option value="">Funcionario de fincas</option>
        </select></br></br>

        <div>
            <table border="1" align="center">
                <thead>
                    <tr>
                        <th>Num</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Cédula</th>
                        <th>Fecha registro</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Departamento</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Joseph</td>
                        <td>Quesada Jiménez</td>
                        <td>701230456</td>
                        <td>20/5/2021</td>
                        <td>joseph95@gmail.com</td>
                        <td>8726-4094</td>
                        <td>Académico</td>
                        <td>Activo</td>
                        <td>
                            <button>
                                <a href="modificarPersonal.php" style="text-decoration: none; color: blue;">Modificar</a>
                            </button>
                            <button>
                                <a href="listarPersonal.php?" style="text-decoration: none; color: blue;">Desactivar</a>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mario</td>
                        <td>Rodriguez Muñoz</td>
                        <td>1103207984</td>
                        <td>28/5/2022</td>
                        <td>rodri1405@gmail.com</td>
                        <td>6214-8859</td>
                        <td>Académico</td>
                        <td>Desactivo</td>
                        <td>
                            <button>
                                <a href="modificarPersonal.php" style="text-decoration: none; color: blue;">Modificar</a>
                            </button>
                            <button>
                                <a href="listarPersonal.php?" style="text-decoration: none; color: blue;">Activar</a>
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