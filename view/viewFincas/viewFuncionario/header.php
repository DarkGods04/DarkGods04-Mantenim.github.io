<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <ul class="menu">
                <li class="menu-item"><a href="../viewFuncionario/inicio.php" class="menu-link link">Menú principal</a></li>
                <div class="menu-item"><a href="#" class="menu-link link">Reportes</a>
                    <ul>
                        <li class="menu-item"><a href="../viewFuncionario/registrarReporteFuncionarioFincas.php" class="menu-link link">Generar Reporte</a></li>
                        <li class="menu-item"><a href="../viewFuncionario/listarReportesFuncionarioFincas.php" class="menu-link link">Atender Reporte</a></li>
                    </ul>
                </div>
                <div class="menu-item"><a href="#" class="menu-link link">Activos</a>
                    <ul>
                        <li class="menu-item"><a href="../viewFuncionario/registrarUsoActivoFuncionarioFincas.php" class="menu-link link">Registrar uso de activo</a></li>
                        <li class="menu-item"><a href="listarHistorialUso.php" class="menu-link link">Historial de uso de activos</a></li>
                        <li class="menu-item"><a href="../viewFuncionario/listarActivosFuncionarioFincas.php" class="menu-link link">Consultar Activos</a></li>
                    </ul>
                </div>                
                <li class="menu-item"><a href="../view/../index.php" class="menu-link link">Cerrar Sesión</a></li>
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

header .nav ul div ul{
    position: absolute;
    left: 0;
    width: 200px;
    background: #990000;
    display: none;
}

header .nav ul div ul{
    float:left;
    left: 700px;
    top: 55px;
    padding: 8px 12px;
    border-radius: 3px;
    background-color: #034574;
    transition: 0.5s;
    box-shadow: 7px 13px 37px #000;
    border: 1px solid white;
}

header .nav ul div:hover > ul{
    display: initial;
}