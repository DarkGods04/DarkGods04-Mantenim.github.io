<?php include("../viewSupervisor/header.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de activo</title>
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

            <h3>Registra reporte de activo</h3>
           
            <div>
                <label for="areaReporte">Area</label>
                <select name="areaReporte">
                    <option value="value1">Oficina</option>
                    <option value="value2">Biblioteca</option>
                    <option value="value2">Biblioteca</option>
                    <option value="value2">Aula 1</option>
                    <option value="value2">Aula 2</option>
                    <option value="value2">Aula 5</option>
                    <option value="value2">Laboratorio Informatica</option>
                </select>
            </div>
            <br>

            <div>
                <label for="clasificacion">Activo</label>
                <select name="clasificacion">
                    <option value="value1">1234 - Aire acondicionado</option>
                    <option value="value2">4321 - Pizarra inteligente</option>
                </select>
            </div>
            <br>

<!-- ESTA PARTE ES PARA QUE SEA ALGO MAS VISUAL, NO SABIA SI DEJARLO O NO. IGUALMENTE SOLO ES DE QUITARLO
    DE IGUAL MANERA, SERIA QUE ESTA PARTE NO TENGA OPCION DE EDITAR Y SOLO SE CARGUEN LOS DATOS DEL ACTIVO AHI -->
            
            <div>
                <label for="codigo">Activo:</label>
                <input type="text" name="codigo" placeholder="Ej: 1234">
            </div>

            <div>
                <label for="correo">Nombre</label>
                <input type="text" name="correo" placeholder="Ej: Aire acondicionado">
            </div>

            <div>
                <label for="marcaActivo">Marca</label>
                <input type="text" name="marcaActivo" placeholder="Ej: Daikin">
            </div>

            <div>
                <label for="fechaHora">Fecha de reporte </label>
                <input type="date" name="fecha" />
            </div>
            <br>

            <label for="anotaciones">Anotaciones de reporte </label>
            
            <div>
                <textarea name="anotaciones" rows="10" cols="40">Anotaciones de reporte</textarea>
            </div>

            <button type="submit" name="btnEnviar" value="ok">Enviar</button>
        </form>
    </div>
</body>

</html>


<?php include("../viewSupervisor/footer.php") ?>