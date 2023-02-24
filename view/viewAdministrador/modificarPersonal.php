<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar personal</title>
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

            <h2>Modificando personal</h2>

            <div>
                <label for="areaPersonal">Tipo de personal</label>
                <select name="areaPersonal">
                    <option value="" selected disabled hidden>Académico</option>
                    <option value="">Académico</option>
                    <option value="">Funcionario administrativo</option>
                    <option value="">Funcionario de infraestructura</option>
                    <option value="">Funcionario de tecnologías</option>
                    <option value="">Supervisor de fincas</option>
                    <option value="">Funcionario de fincas</option>
                </select>
            </div>

            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre" value="Joseph" required>
            </div>
            <div>
                <label for="apellido">Apellidos</label>
                <input type="text" name="apellido" placeholder="Apellidos" value="Quesada Jiménez" required>
            </div>
            <div>
                <label for="cedula">Cédula</label>
                <input type="text" name="cedula" placeholder="Cédula de identidad" value="701230456" required>
            </div>
            <div>
                <label for="correo">Correo</label>
                <input type="email" name="correo" placeholder="correoelectrónico@gmail.com" value="joseph95@gmail.com" required>
            </div>
            <div>
                <label for="telefono">Teléfono</label>
                <input type="tel" name="telefono" placeholder="Número de celular" value="8726-4094" required>
            </div>
            <div>
                <label for="fechaNacimiento">Fecha de nacimiento</label>
                <input type="date" name="fechaNacimiento" required>
            </div>
            <div>
                <label for="fechaRegistro">Fecha de registro</label>
                <input type="date" name="fechaRegistro" required></br></br>
            </div>

            <label for="observaciones">Observaciones</label>
            <div>
                <textarea name="observaciones" rows="5" cols="30" placeholder="Observaciones">Académico interino</textarea>
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