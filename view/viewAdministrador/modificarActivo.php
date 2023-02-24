<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar activo</title>
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
        <form action="..//" method="POST">

            <h2>Modificando información del activo</h2>

            <div>
                <label for="areaActivo">Área del activo</label>
                <select name="areaActivo">
                    <option value="" selected disabled hidden>Infraestructura</option>
                    <option value="">Infraestructura</option>
                    <option value="">Tecnologías</option>
                    <option value=" ">Fincas</option>
                </select>
            </div>

            <div>
                <label for="codigoActivo">Código</label>
                <input type="text" name="codigoActivo" placeholder="Ej: MT-02" value="1234" required>
            </div>

            <div>
                <label for="codigoActivo">Número serie</label>
                <input type="text" name="codigoActivo" placeholder="Ej: MTH35153" value="D415A12RT34" required>
            </div>

            <div>
                <label for="nombreActivo">Nombre</label>
                <input type="text" name="nombreActivo" placeholder="Ej: Motosierra" value="Aire acondicionado" required>
            </div>

            <div>
                <label for="marcaActivo">Marca</label>
                <input type="text" name="marcaActivo" placeholder="Ej: Husqvarna" value="Daikin" required>
            </div>

            <div>
                <label for="modeloActivo">Modelo</label>
                <input type="text" name="modeloActivo" placeholder="Ej: 365" value="Inverter" required>
            </div>

            <div>
                <label for="ubicacion">Ubicación</label>
                <input type="text" name="ubicacion" placeholder="Ubicacion" value="Aula 10" required>
            </div>

            <div>
                <label for="fecha">Fecha de registro</label>
                <input type="date" name="fecha" required></br></br>
            </div>

            <label for="observaciones">Observaciones</label>
            <div>
                <textarea name="observaciones" rows="5" cols="30" placeholder="Observaciones">Garatía hasta el 9/9/2022</textarea>
            </div>

            <button type="submit" name="btnEnviar" value="ok">Enviar</button>
        </form>
    </div>

    <center>
        <?php
        include '../viewAdministrador/footer.php';
        ?>
    </center>
</body>


</html>