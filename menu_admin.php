<?php 
session_start();
if(isset($_SESSION["sesionActiva"])==FALSE || $_SESSION["sesionActiva"]!=1){


	echo "<script> alert('Inicie Sesión Para continuar')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=login.html'>";
			


}

else{



	echo '	





<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
<title>Portal Web IUTY</title>
<link rel="stylesheet" href="web/css/index_style.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css">
</head>
<body>
	
<div id="container_3_3">

		<div class="container_3_3_head"> Menú Administrativo</div>
	
		<div class="container_3_3_label">
	

	<div class="contenedor-superior">
		<div class="contenedor" id="uno">
			<a href="gestionar_noticia.php"><img class="icon" src="web/images/icon3.png"></a>
			<p class="texto">Registrar Noticias</p>
		</div>

		<div class="contenedor" id="siete">
			<a href="listado_noticias.php"><img class="icon" src="web/images/icon2.png"></a>
			<p class="texto">Listado Noticias</p>
		</div>		

		<div class="contenedor" id="dos">
			<img class="icon" src="web/images/icon1.png">
			<p class="texto">Contactos</p>
		</div>

		<div class="contenedor" id="tres">
			<a href="gestionar_programa.html"><img class="icon" src="web/images/icon3.png"></a>
			<p class="texto">Registar Programas</p>
		</div>

		<div class="contenedor" id="cuatro">
			<a href="listado_programas.php"><img class="icon" src="web/images/icon2.png"></a>
			<p class="texto">Listado Programas</p>
		</div>

		<div class="contenedor" id="seis">
			<a href="php/cerrar_sesion.php"><img class="icon" src="web/images/icon3.png"></a>
			<p class="texto">Cerrar Sesión</p>
		</div>
	</div>




	

</body>
</html>

';
}
?>