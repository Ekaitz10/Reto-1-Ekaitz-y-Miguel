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
			<a href="#" id="a"><b>REPARTO</b></a>
			<a href="trailers.php" id="a"><b>TRAILERS Y MAS</b></a>
		</nav>
		</center>
	<section id="section">
		<h1>REPARTO PRINCIPAL</h1>
		<article id="articlereparto2">
            <img src="imagenes\JackQuaid.png">
            <h3><a href="https://es.wikipedia.org/wiki/Jack_Quaid"  target="_blank">Jack Quaid</a></h3>
        </article>
        <article id="articlereparto">
            <img src="imagenes\KarlUrban.png">
            <h3><a href="https://es.wikipedia.org/wiki/Karl_Urban"  target="_blank">Karl Urban</a></h3>
        </article>
        <article id="articlereparto">
            <img src="imagenes\LazAlonso.png">
            <h3><a href="https://es.wikipedia.org/wiki/Laz_Alonso"  target="_blank">Laz Alonso</a></h3>
        </article>
        <article id="articlereparto">
            <img src="imagenes\TomerCapon.png">
            <h3><a href="https://en.wikipedia.org/wiki/Tomer_Kapon"  target="_blank">Tomer Capon</a></h3>
        </article>
        <article id="articlereparto">
            <img src="imagenes\KarenFukuhara.png">
            <h3><a href="https://en.wikipedia.org/wiki/Karen_Fukuhara"  target="_blank">Karen Fukuhara</a></h3>
        </article>
	</section>
	<footer style="margin-top: 26%;">
        <p id="contenedor_reloj"></p> 
        <?php echo date("d")."/".date("m")."/".date("Y");?>
        <img style="float:right; width: 5%; height: 5%;" src="imagenes/acmelogo.png">
        <p style="text-align: center;">&copy; 2020, Ekaitz y Miguel</p>
    </footer>
</body>
</html>