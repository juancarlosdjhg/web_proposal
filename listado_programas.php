<?php 
session_start();
if(isset($_SESSION["sesionActiva"])==FALSE || $_SESSION["sesionActiva"]!=1){


	echo "<script> alert('Inicie Sesión Para continuar')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=index.php'>";
			


}
?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Portal Web IUTY</title>
<link rel="icon" type="image/png" href="web/images/favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="web/css/sidebar.css" rel="stylesheet" type="text/css" media="all" />
<link href="web/css/styles.css" rel="stylesheet" type="text/css" media="all" />
<script src="web/js/jquery.min.js"></script>
<script src="web/js/popup.js"></script>
<!--start slider -->
<link rel="stylesheet" href="web/css/fwslider.css" media="all">
<script src="web/js/jquery-ui.min.js"></script>
<script src="web/js/css3-mediaqueries.js"></script>
<script src="web/js/fwslider.js"></script>
<!--end slider -->
<!---strat-date-piker---->
<link rel="stylesheet" href="web/css/jquery-ui.css" />
<script src="web/js/jquery-ui.js"></script>
		  <script>
				  $(function() {
				    $( "#datepicker,#datepicker1" ).datepicker();
				  });
		  </script>
<!---/End-date-piker---->
<link type="text/css" rel="stylesheet" href="web/css/JFGrid.css" />
<link type="text/css" rel="stylesheet" href="web/css/JFFormStyle-1.css" />
		<script type="text/javascript" src="web/js/JFCore.js"></script>
		<script type="text/javascript" src="web/js/JFForms.js"></script>
		<!-- Set here the key for your domain in order to hide the watermark on the web server -->
		<script type="text/javascript">
			(function() {
				JC.init({
					domainKey: ''
				});
				})();
		</script>
<!--nav-->
<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				cont 		= $('#container_1_1');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
				
				cont.removeAttr('style');
				menu.removeAttr('style');

        		}
				
    		});
		});
</script>
</head>
<body>
<!-- start header -->
			<!-- start profile_details -->
					<form class="style-1 drp_dwn">
						<div class="row">
							<div class="grid_3 columns">
							</div>		
						</div>		
					</form>

		<div class="clear"></div>
		<div class="top-nav">
		<nav class="clearfix">
				<ul>
				<li class="active"><a href="index.html">Inicio</a></li> 
				<li><a href="about.html">Acerca de</a></li> 
				<li><a href="gallery.html">Galeria de fotos</a></li> 
				<li><a href="activities.html">Noticias & Eventos</a></li> 
				<li><a href="contact.html">Contáctanoss</a></li>
				</ul>
				<a href="#" id="pull">Menu</a>
			</nav>
		</div>
	</div>
</div>
<!----start-images-slider---->


	</div>
	
<!--start main -->
		<div id="container_9_9">	
			<div class="container_9_9_head"> 
				Listado de Programas Nacionales de Formación
			</div>
			<div class="container_6_6_label">
			<div class="CSSTableGenerator" >
				<table  align="center">
						<th>
							Nombre del Programa
						</th>
						<th>
							Modificar/Eliminar
						</th>												
					<!-- Espacio en blanco para separar-->
					<!-- Fin del espacio en blanco-->
      				<?php
      				include("php/bd.php");
      				conectar();
					$SQL="SELECT * FROM programa";
					$ejecucion=mysql_query($SQL);
					while ($row=mysql_fetch_array($ejecucion)) {
						$id_programa=$row["id_programa"];
						echo "<tr>";
						echo "<td>".$row["nombre_programa"]."</td>";
						echo "<td><center>"."<a class='inp' href='modificar_programa.php?id=$id_programa'>Modificar/Eliminar</a>"."</td></center>";
						echo "</tr>";
					}

					?>
				</table>
				</div>
			</div>
		</div>


</body>
</html>