<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Menu principal supervisor</title>
    <?php include ("../viewInfraestructura/headerInfra.php")?>
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

<h1 style="font-size:35px;" >Área de infraestructura</h1>


<h1>Activos registrados en el area de infraestructura</h1>

<table border="1">
  <tr>
    <th>Num</th>
    <th>Codigo</th>
    <th>Nombre</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Numero serie</th>
    <th>Fecha compra</th>
    <th>Ubicacion</th>
    <th>Estado</th>
    <th>Observaciones</th>

  </tr>
  <tr>
    <td>1</td>
    <td>A234 </td>
    <td>Shindawa</td>
    <td>Shindawa</td>
    <td>2015</td>
    <td>234</td>
    <td>12-08-2015</td>
    <td>Sarapiqui</td>
    <td>Activo</td>
    <td>   </td>
  </tr>
 
</table>


  <br><br>
    <button id="btnPrev">Prev.</button>
    <button id="1">1.</button>
    <button id="2">2.</button>
    <button id="3">3.</button>
    <button id="btnNext">Next.</button>


</div>
</body>

</html>

<?php include("../viewAcademico/footer.php") ?>