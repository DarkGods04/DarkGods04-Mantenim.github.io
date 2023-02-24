<?php include("../viewFuncionario/header.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registra uso de activo</title>
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

            <h3>Registra Uso de Activo</h3>

            <div>
                <label for="estadoReportes">Tipo de activo</label>
                <select name="estadoReportes">
                    <option value="" selected disabled hidden>Tipo</option>
                    <option value="">Motocierra</option>
                    <option value="">Motoguadaña</option>
                    <option value="">Carro corta cesped</option>
                </select></br></br>
            </div>

            <div>
                <label for="estadoReportes">Activo</label>
                <select name="estadoReportes">
                    <option value="" selected disabled hidden></option>
                    <option value="">STIHL FS450 - #1</option>
                    <option value="">STIHL FS450 - #2</option>
                    <option value="">STIHL FS450 - #3</option>
                </select></br></br>
            </div>

            <div>
                <label for="correo">Num. Activo</label>
                <input type="text" name="correo" placeholder="Ej: 6024">
            </div>
            <div>
                <label for="marcaActivo">Num. Modelo</label>
                <input type="text" name="marcaActivo" placeholder="Ej: Makita">
            </div>
            <div>
                <label for="modeloActivo">Num. Serie</label>
                <input type="text" name="modeloActivo" placeholder="Ej: RBC1234UU2022">
            </div>
            <div>
                <label for="fechaHora">Fecha y hora de iniciado el uso </label>
                <input type="date" name="fechaInicio" />
                <input type="time" name="horaInicio" />
            </div>
            <div>
                <label for="fechaHorafina">Fecha y hora de finalizado el uso </label>
                <input type="date" name="fechaFinal" />
                <input type="time" name="horaFinal" /><br></br>
            </div><br>
            <div>
                <label for="fechaHora">Hora maquina incio </label>
                <input type="date" name="fechaMaquinaInicio" />
                <input type="time" name="horaMaquinaInicio" />
            </div>
            <div>
                <label for="fechaHora">Hora maquina final </label>
                <input type="date" name="fechaMaquinaFinal" />
                <input type="time" name="horaMaquinaFinal" />
            </div><br>
            <div>
                <label for="modeloActivo">Combustible abastecido</label>
                <input type="text" name="combustible" placeholder="Ej: 12 Litros">
            </div>
            <div>
                <label for="combusDisponible">Combustible disponible</label><br>
                <input type="text" name="combusDisponible" placeholder="               31 Litros"> 
            </div><br>

            <label for="anotaciones">Observaciones</label>
            <div>
                <textarea name="anotaciones" rows="10" cols="40">Anotaciones de reporte</textarea>
            </div>

            <button type="submit" name="btnEnviar" value="ok">Enviar</button>
        </form>
    </div>
</body>

</html>


<?php include("../viewFuncionario/footer.php") ?>