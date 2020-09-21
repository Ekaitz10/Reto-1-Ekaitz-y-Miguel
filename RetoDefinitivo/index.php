<!DOCTYPE html>
<html>
<head>
    <title>ACME</title>
    <link rel="stylesheet" type="text/css" href="estilo\estilo.css">
    <script type="text/javascript" src="Estilo/funciones.js"></script>
</head>
<body onload="HoraActual(<?php echo date("H").", ".date("i").", ".date("s"); ?>)">
    <header>
        <center><img style="height: 200px; width: 50%;" src="imagenes\titulo.png"></center>
    </header>
    <center>
    <nav>
        <a href="#" id="a"><b>INICIO</b></a>
        <a href="temporadas.php" id="a"><b>TEMPORADAS</b></a>
        <a href="reparto.php" id="a"><b>REPARTO</b></a>
        <a href="trailers.php" id="a"><b>TRAILERS Y MAS</b></a>
    </nav>
    </center>
    <section id=sectionindex>
    </section>
    <footer>
        <p id="contenedor_reloj"></p> 
        <?php echo date("d")."/".date("m")."/".date("Y");?>
        <img style="float:right; width: 5%; height: 5%;" src="imagenes/acmelogo.png">
        <p style="text-align: center;">&copy; 2020, Ekaitz y Miguel</p>
    </footer>
</body>
</html>