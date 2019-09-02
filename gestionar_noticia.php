<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Portal Web IUTY</title>
<link rel="icon" type="image/png" href="web/images/favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="web/css/sidebar.css" rel="stylesheet" type="text/css" media="all" />
<link href="web/css/styles.css" rel="stylesheet" type="text/css" media="all" />
<script src="web/js/jquery.min.js"></script>
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
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> <!-- Integramos jQuery-->
		<script src="script.js"></script> <!-- Integramos nuestro script que contendra nuestras funciones Javascript-->





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

			<!--start menu -->

			<!-- start profile_details -->
					<form class="style-1 drp_dwn">
						<div class="row">
							<div class="grid_3 columns">
							</div>		
						</div>		
					</form>
		</div>
		<div class="clear"></div>
		<div class="top-nav">
		<nav class="clearfix">
				<ul>
				<li><a href="index.html">Inicio</a></li> 
				<li><a href="about.html">Acerca de</a></li> 
				<li><a href="gallery.html">Galeria de fotos</a></li> 
				<li><a href="activities.html">Noticias & Eventos</a></li> 
				<li class="active"><a href="contact.html">Contáctanos</a></li>
				</ul>
				<a href="#" id="pull">Menu</a>
			</nav>
		</div>
	</div>
</div>
</div>
<!--start main -->
<div class="wrap">
	<div class="main">
		<div class="contact">				
				<div class="contact_left">
					<div class="contact_info">
						<center><h3>Gestionar Noticia</h3>
			    	 		<div class="user-img">
								<img src="web/images/notice.png">
					   		</div>
						</center>
      				</div>
				</div>				
				<div class="contact_right">
				  <div class="contact-form">
				  <div class="mensage"></div> 
					    <form method="POST" enctype="multipart/form-data" action="noticia.php">


					    	<?php 
					    		include('php/bd.php');
								conectar();

								
 							?>
							<span><label>TIPO DE LA NOTICIA</label></span>
							<select name="tipo_noticia"	class="textbox">
 							<option  value="">Seleccione</option>
 							<?php
 								$tira="SELECT * FROM tipo_noticia";
								$sql=mysql_query($tira);
								while($lista=mysql_fetch_array($sql))
   								echo "<option  value='".$lista["id_tipo_noticia"]."'>".$lista["nombre_tipo_noticia"]."</option>";
   							?>
							</select>

					    	<div>
						    	<span><label>TITULO</label></span>
						    	<span><input name="titulo" type="text" class="textbox"></span>
						    </div>
					    	<div>
						    	<span><label>CONTENIDO</label></span>
						    	<span><textarea name="contenido" ></textarea></span>
						    </div>
						     <div>
						    	<span><label>IMAGEN</label></span><br>
								
  								<p class="file">
						    		<span><input type="file"  multiple="multiple" name="arch[]" id="archivos"></span>
									<label for="file">Subir Imagenes</label>
								</p>




						    </div><br>
					    	<div>
						    	<span><label>RESUMEN</label></span>
						    	<span><textarea name="resumen" ></textarea></span>
						    </div>
						    <div>
						    	<span><label>AUTOR</label></span>
						    	<span><input name="autor" type="text" class="textbox"></span>
						    </div>	  
						    <div>
						    	<span><label>FECHA DE ACONTECIMIENTO</label></span>
						    	<input name="fecha" type="date" class="textbox">
							
							<div>
						    	<span><label>NOTICIA DESCATACADA</label></span>
						    	<span><input name="destaca" type="checkbox" class=""></span>
						    </div>	
							
							<div>
								
								<span><input type="submit" name="enviar" id="eenviar"></input></span>

							</div>
					    </form>
				    </div>
  				</div>		
  				<div class="clear"></div>		
		  </div>
	</div>
</div>		
<!--start main -->
<div class="footer_bg">
<div class="wrap">
</div>
</div>		
</body>
</html>