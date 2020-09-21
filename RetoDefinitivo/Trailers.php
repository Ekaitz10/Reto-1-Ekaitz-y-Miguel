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
			<a href="index.php" id="a"><b>INICIO</b></a>
			<a href="temporadas.php" id="a"><b>TEMPORADAS</b></a>
			<a href="reparto.php" id="a"><b>REPARTO</b></a>
			<a href="#" id="a"><b>TRAILERS Y MAS</b></a>
		</nav>
		</center>
	<section id="section">
		<h1>TRAILERS</h1>
		<article>
            <h3>Temporada 1</h3>
            <center><iframe width="720" height="480" src="https://www.youtube.com/embed/GXM7SRdos2A" frameborder="0" allowfullscreen>></iframe></center>
        <article>
            <h3>Temporada 2</h3>
            <center><iframe width="720" height="480" src="https://www.youtube.com/embed/Ox3LD-CYYE0" frameborder="0" allowfullscreen>></iframe></center>
        </article>
        <article>
            <h2>MERCHANDISING</h2>
            <center>
            <button><a href="https://www.emp-online.es/fan-merch/the-boys/" target="_blank">CLICK AQUI</a></button>
            </center>
        </article>
        
	</section>
	<footer>
        <p id="contenedor_reloj"></p> 
        <?php echo date("d")."/".date("m")."/".date("Y");?>
        <img style="float:right; width: 5%; height: 5%;" src="imagenes/acmelogo.png">
        <p style="text-align: center;">&copy; 2020, Ekaitz y Miguel</p>
    </footer>
</body>
</html>