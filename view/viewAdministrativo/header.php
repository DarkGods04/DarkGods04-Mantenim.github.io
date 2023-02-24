<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../view/css/styleheader.css">
    <title>cabeza</title>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <ul class="menu">
                <li class="menu-item"><a href="../viewAdministrativo/inicio.php" class="menu-link link">Menú principal</a></li>
                <li class="menu-item"><a href="../viewAdministrativo/registrarReporteAdministrativo.php" class="menu-link link">Generar eportes</a></li>
                <li class="menu-item"><a href="../viewAdministrativo/listarMisReportes.php" class="menu-link link">Mis reportes</a></li>
                <li class="menu-item"><a href="../index.php" class="menu-link link">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>
</body>

<style>
.header{
    background-color: #990000;
    height: 80px;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
}

.nav{
    display: flex;
    justify-content: space-between;
    max-width: 1600px;
    margin: 0 auto;
}

.menu{
    display: flex;
    margin: auto;
    list-style: none;
}

.menu-item{
    font-size: 15px;
    margin: 0 20px;
    line-height: 72px;
    font-family: 'times new roman';
}

.link{
    color: white;
    text-decoration: none;
}

.menu-link{
    padding: 8px 12px;
    border-radius: 3px;
}

.menu-link:hover,
.menu-link_active {
    background-color: #034574;
    transition: 0.5s;
    box-shadow: 7px 13px 37px #000;
    border: 1px solid white;
}