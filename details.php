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
<!-- start header -->	<div class="banner">
		<img src="web/images/cintillo.png" alt="">
	</div>

			<!--start menu -->
<div id='cssmenu'>
<ul class="menu">
   <li><a class="active-index" href='index.php'><span>IUTY</span></a></li>
   <li class='active has-sub'><a href='#' class="first-sub"><span>Institución</span></a>
      <ul>
         <li class='has-sub-2'><a href='#' class=""><span>Reseña Historica</span></a>
         <li class='has-sub-2'><a href='#' class=""><span>Misión & Visión</span></a>
         <li class='has-sub-2'><a href='#' class=""><span>Organigrama</span></a>

         </li>
      </ul>
   </li>
      <li class='active has-sub'><a href='#' class="first-sub"><span>Oferta Academica</span></a>
      <ul>
      	<?php
      	include('php/bd.php');
		conectar();
		$SQL="SELECT * FROM programa";
		$ejecucion=mysql_query($SQL);
		

		while($programas=mysql_fetch_array($ejecucion)){
		$id=$programas["id_programa"];
		echo "<li class='has-sub-2'><a href='plantilla.php?id=";		
		echo $id."'";
		echo "class=''><span>";
		echo $programas["nombre_programa"];
		echo  "</span></a></li>";
		}
      	?>
      </ul>
   <li><a href='activities.php'><span>Noticias & Eventos</span></a></li>
   <li class='active has-sub'><a href='#' class="first-sub"><span>Servicios</span></a>
   <li class='active has-sub'><a href='#' class="first-sub"><span>Investigación</span></a>
   <li class='last'><a href='contact.html'><span>Contáctanos</span></a></li>
</ul>
</div>

		<img src="web/images/banner.jpg">
				
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
				<li  class="active"><a href="index.html">Inicio</a></li> 
				<li><a href="about.html">Acerca de</a></li> 
				<li><a href="gallery.html">Galeria de fotos</a></li> 
				<li><a href="activities.html">Noticias & Eventos</a></li> 
				<li><a href="contact.php">Contáctanos</a></li>
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
		<div class="sidebar2">
			 <div class="date_btn">
				<span class="info-label">Información</span>
			</div>

			<?php
			$noticia=$_GET['id'];
			$registros=mysql_query("SELECT * FROM noticia WHERE id_noticia='$noticia'");
			if ($reg=mysql_fetch_array($registros))
						{

?>


			<h4>Fuente</h4>
			<ul class="s_nav">
				<li><center><img src="web/images/service.png"></center></li>
				<li><center><p class="para"><?php echo $reg['autor']?></p></center></li>
			<h4>Lugar</h4>
				<li><p class="para">Avenida Alberto Ravell con Avenida José Páez, Municipio Independencia, estado Yaracuy</p></li>
			<h4>Fotografia</h4>
				<li><p class="para"><?php echo $reg['autor']?></p></li>
			</ul>
		</div>
		<div class="details">
			<h3>Ultima Hora</h3>
			<h2><?php echo $reg['titulo']?></h2>
			
		<div class="images-slider">
			<!-- start slider -->
		    <div id="fwslider">
		        <div class="slider_container">


    

			<?php
				$registros_imagen=mysql_query("select * from imagen where id_noticia='$noticia'");

					while ($img=mysql_fetch_array($registros_imagen)){
			?>		
<div class="slide"> 
		                <!-- Slide image -->
		                    <img src="<?php echo $img['direccion'] ?>"/>
		                <!-- /Slide image -->
		                <!-- Texts container -->
		                <div class="slide_content">
		                    <div class="slide_content_wrap">
		                        <!-- Text title -->
		                        
		                        <!-- /Text title -->
		                    </div>
		                </div>
		                 <!-- /Texts container -->
		            </div>
		            <?php }?>

		            <!-- /Duplicate to create more slides -->
		        </div>
		        <div class="timers"> </div>
		        <div class="slidePrev"><span> </span></div>
		        <div class="slideNext"><span> </span></div>
		    </div>
			
		    <!--/slider -->
		</div>











			<h4>Fecha <?php echo $reg['fecha']?></h4>
			<div class="det_text">
				<p align=justify class="para2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $reg['contenido']?></p>
			</div>
		</div>
	</div>
	
</div>
<?php } ?>

	
<!--start footer -->
<div class="footer_bg">
<div class="wrap">
<div class="footer">
 <div class="sidebar pos-right icon show">
            <a href="#"><div class="sidebar-content ico-facebook"></div></a>
            <a href="#"><div class="sidebar-content ico-google-plus"></div></a>
            <a href="#"><div class="sidebar-content ico-twitter"></div></a>
            <a href="#"><div class="sidebar-content ico-youtube"></div></a>
        </div>
			<div class="clear"></div>
			<div class="copy">
				<p class="link"><span>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a> & <a href="#">Kernel Group</a></span></p>
				<p class="link"><span><a href="javascript: void(0);" onclick="javascript:AbrirCentrado('login.html','NombreVentana','1000','700','scrollbars=1');">Web Master</a></span></p>

			</div>

</div>
</div>
</div>		
</body>
</html>