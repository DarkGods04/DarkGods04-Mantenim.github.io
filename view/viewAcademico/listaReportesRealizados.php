<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include("../viewAcademico/headerAcademico.php") ?>
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

  <h1>Reportes realizados</h1>

  <table border="1">
    <tr>
      <th>Codigo reporte</th>
      <th>Fecha reporte</th>
      <th>persona que realizo reporte</th>
      <th>estado</th>
    </tr>

    <tr>
      <td>A234 </td>
      <td>12-04-2022</td>
      <td>Juan jimenez</td>
      <td>en espera</td>  
    </tr>
  
  </table>


    <br><br>
    <center>
      <button id="btnPrev">Prev.</button>
      <button id="1">1.</button>
      <button id="2">2.</button>
      <button id="3">3.</button>
      <button id="btnNext">Next.</button>
    </center>

  </div>
</body>

</html>

<?php include("../viewAcademico/footer.php") ?>