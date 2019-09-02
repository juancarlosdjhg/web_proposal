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
						<center><h3>Gestionar Programa</h3>
			    	 		<div class="user-img">
								<img src="web/images/notice.png">
					   		</div>
						</center>
      				</div>
				</div>				
				<div class="contact_right">
				  <div class="contact-form">
				  <div class="mensage"></div> 
					    <form method="POST" enctype="multipart/form-data" action="me_programa.php">

      						<?php
      						include('php/bd.php');
							conectar();


							$programa=$_GET['id'];
							$registros=mysql_query("SELECT * FROM programa WHERE id_programa='$programa'");
								while($reg=mysql_fetch_array($registros)){
									$nombre=$reg["nombre_programa"];
									$mision=$reg["mision"];
									$vision=$reg["vision"];
									$perfil_egresado=$reg["perfil_egresado"];
							?>


					    	<div>
						    	<span><label>NOMBRE</label></span>
						    	<input type="hidden" name="id_programa" value="<?php echo $programa?>">
						    	<span><input name="nombre" type="text" class="textbox" value="<?php echo $nombre?>"></span>
						    </div>
					    	<div>
						    	<span><label>MISION</label></span>
						    	<span><textarea name="mision"><?php echo $mision?></textarea></span>
						    </div>
					    	<div>
						    	<span><label>VISION</label></span>
						    	<span><textarea name="vision" ><?php echo $vision?></textarea></span>
						    </div>
					    	<div>
						    	<span><label>PERFIL EGRESADO</label></span>
						    	<span><textarea name="perfil_egresado"><?php echo $perfil_egresado?></textarea></span>
						    </div>
							<div>
						    	<span><label>IMAGENES DEL PROGRAMA</label></span>
						    		<br><p class="file">
									<span><input type="file"  multiple="multiple" name="imagenes[]"></span>
									<label for="file">ELEGIR MÁS IMAGENES</label>
									</p><br>
									
						<?php
								$registros_imagen=mysql_query("select imagen.id_imagen,imagen.direccion from imagen,imagen_programa where imagen.id_imagen=imagen_programa.id_imagen and imagen_programa.id_programa='$programa'");
								while ($img=mysql_fetch_array($registros_imagen)){
						

							echo "<a href='php/eliminar_arch_programa.php?id=".$img['id_imagen']."&programa=".$programa."&tipo=1'>								
								<img height='80' width='80' src='".$img['direccion']."'/>
								<img class='image-eliminar'>
							</a>	";

						 }?>

									</div>
							<div>
						    	<span><label>LOGO DEL PROGRAMA</label></span><br>
						    	<p class="file">
								<span><input type="file" name="logo"></span>
								<label for="file">ELEGIR NUEVO LOGO</label>
								</p>
								<br>
								<?php
								$registros_imagen=mysql_query("select direccion_logo as direccion from programa where id_programa='$programa'");
								while ($img=mysql_fetch_array($registros_imagen)){
						
						if($img['direccion']!='web/images/service.png'){
						
							echo "<a href='php/eliminar_arch_programa.php?programa=".$programa."&tipo=2'>								
								<img height='80' width='80' src='".$img['direccion']."'/>
								<img class='image-eliminar'>
							</a>	";
							
							}

						 }?>
								
						    </div>
							<div>
							   	<span><label>PENSUM</label></span>
											
				<?php
					$registros_imagen=mysql_query("select id_pensum,fecha,direccion as direccion from pensum where id_programa='$programa'");
								while ($img=mysql_fetch_array($registros_imagen)){
						

							echo "".$img['fecha']."<br><a href='php/eliminar_arch_programa.php?pensum=".$img['id_pensum']."&programa=".$programa."&tipo=3'>									
								<img height='80' width='80' src='web/images/pdf.png'/>
								<img class='image-eliminar'>
							</a><br>";

						 }?>
								<br><br><p class="file">
						    	<span><input type="file" name="pensum"></span>
								<label for="file">ELEGIR NUEVO ARCHIVO</label>
								</p>
												
								<br>
								<span><label>A&Ntilde;O</label></span>
								<span><input type="date" class="textbox" name="anio"></span>
						    </div>			
							<br>
						    <div>
								<span><input type="submit" name="MODIFICAR" value="MODIFICAR"></span>
								<span><input type="submit" name="ELIMINAR" value="ELIMINAR"></span>
							</div>
					    </form>
				    </div>
  				</div>		
  				<div class="clear"></div>		
		  </div>
	</div>
</div>
<?php }?>
<!--start main -->
<div class="footer_bg">
<div class="wrap">
</div>
</div>		
</body>
</html>