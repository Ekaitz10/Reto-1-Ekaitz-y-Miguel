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
			<a href="#" id="a"><b>TEMPORADAS</b></a>
			<a href="reparto.php" id="a"><b>REPARTO</b></a>
			<a href="trailers.php" id="a"><b>TRAILERS Y MAS</b></a>
		</nav>
		</center>
	<div id="articletemporadas">
	<section id="section">
			<h1>TEMPORADA 1</h1>
			<article>
				<h3>Sinopsis</h3>
				<p>Unos poderosos superhéroes sobre los que la empresa Vought International tiene pertenencia, son héroes para los ciudadanos pero muy arrogantes y corruptos en la realidad, y son conocidos como los Siete.<br>Por otra parte, The Boys, son un grupo dirigido por Billy Butcher en el cual los integrantes han sido agredidos o afectados por las negligentes acciones de los superhéroes, y están dispuestos a acabar con ellos, especialmente con Homelander, cuyo estado mental es muy frágil. La incorporación más reciente a la banda es Hughie, y se convertirá en una pieza clave y nexo para el equipo.</p>
			</article>
		<br>
		<h1>TEMPORADA 2</h1>
		<article>
				<h3>Sinopsis</h3>
				<p>Temporada en emisión en Amazon Prime Video.</p>
		</article>
	</section>
	</div>
		<section>
			<div id="articletemporadas2">
				<article >
					<img id="imgcartel" src="imagenes/theboyscartel2.png">
				</article>
			</div>
		</section>
	<footer style="margin-top: 26%;">
        <p id="contenedor_reloj"></p> 
        <?php echo date("d")."/".date("m")."/".date("Y");?>
        <img style="float:right; width: 5%; height: 5%;" src="imagenes/acmelogo.png">
        <p style="text-align: center;">&copy; 2020, Ekaitz y Miguel</p>
    </footer>
</body>
</html>