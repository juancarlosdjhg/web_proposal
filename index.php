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
	<div class="banner">
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
   <li><a href='activities2.php?n=Noticia'><span>Noticias & Eventos</span></a></li>
   <li class='active has-sub'><a href='#' class="first-sub"><span>Servicios</span></a>
   <li class='active has-sub'><a href='#' class="first-sub"><span>Investigación</span></a>
   <li class='last'><a href='contact.php'><span>Contáctanos</span></a></li>
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
	
	<div class="wrap_right">
	
	<div id="container_2_2">	
		<div class="container_2_2_head">			Vinculación<br>Comunitaria</div>
	
		<div class="container_2_2_label"><center><a href="activities.php?n=Vin"><img src="web/images/service.png"></a></center></div>
		
	</div>
	
	<div id="container_2_2">	
		<div class="container_2_2_head">Actividades Institucionales</div>
	
		<div class="container_2_2_label"><center><a href="activities.php?n=Actividades"><img src="web/images/book2.png"></a></center></div>
		
	</div>
	
	<div id="container_2_2">	
		<div class="container_2_2_head">Bienestar Estudiantil</div>
	
		<div class="container_2_2_label"><center><a href="activities.php?n=Bienes"><img src="web/images/book3.jpg"></a></center></div>
		
	</div>
	
	</div>
		<div id="container_4_4">	
		<div class="container_4_4_head"> Noticias Recientes</div>
			
		<div class="images-slider">
			<!-- start slider -->
		    <div id="fwslider">
		        <div class="slider_container">


<?php
$maximo0=("SELECT MAX(id_noticia) FROM noticia");
$r=mysql_query($maximo0);
$r2=mysql_fetch_array($r);
$maximo1=$r2[0];
$maximo2=$maximo1-1;
$maximo3=$maximo2-1;
?>

			<?php
				$registros=mysql_query("select * from noticia where id_noticia='$maximo1'");
				$registros_imagen=mysql_query("select * from imagen where id_noticia='$maximo1'");

					if ($img=mysql_fetch_array($registros_imagen)){
					if ($reg=mysql_fetch_array($registros))
						{
			?>

    <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="<?php echo $img['direccion'] ?>"/>
		                <!-- /Slide image -->
		                <!-- Texts container -->
		                <div class="slide_content">
		                    <div class="slide_content_wrap">
		                        <!-- Text title -->
		                        <a href="details.php?id=<?php echo $maximo1?>"><h5 class="title1"><?php echo $reg['titulo']?><span class="hide" ></span></h5></a>
		                        <!-- /Text title -->
		                    </div>
		                </div>
		                 <!-- /Texts container -->
		            </div>
		            <?php }}?>


		            			<?php
				$registros2=mysql_query("select * from noticia where id_noticia='$maximo2'");
				$registros_imagen2=mysql_query("select * from imagen where id_noticia='$maximo2'");

					if ($img2=mysql_fetch_array($registros_imagen2)){
					if ($reg2=mysql_fetch_array($registros2))
						{
			?>

    <div class="slide"> 
		                <!-- Slide image -->
		                    <a href="details.php?id=<?php echo $maximo2?>"><img src="<?php echo $img2['direccion'] ?>"/></a>
		                <!-- /Slide image -->
		                <!-- Texts container -->
		                <div class="slide_content">
		                    <div class="slide_content_wrap">
		                        <!-- Text title -->
		                        <a href="details.php?id=<?php echo $maximo2?>"><h5 class="title1"><?php echo $reg2['titulo']?><span class="hide" ></span></h5></a>
		                        <!-- /Text title -->
		                    </div>
		                </div>
		                 <!-- /Texts container -->
		            </div>
		            <?php }}?>



			<?php
				$registros3=mysql_query("select * from noticia where id_noticia='$maximo3'");
				$registros_imagen3=mysql_query("select * from imagen where id_noticia='$maximo3'");

					if ($img3=mysql_fetch_array($registros_imagen3)){
					if ($reg3=mysql_fetch_array($registros3))
						{
			?>

    <div class="slide"> 
		                <!-- Slide image -->
		                    <a href="details.php?id=<?php echo $maximo3?>"><img src="<?php echo $img3['direccion'] ?>"/></a>
		                <!-- /Slide image -->
		                <!-- Texts container -->
		                <div class="slide_content">
		                    <div class="slide_content_wrap">
		                        <!-- Text title -->
		                        <a href="details.php?id=<?php echo $maximo3?>"><h5 class="title1"><?php echo $reg3['titulo']?><span class="hide" ></span></h5></a>
		                        <!-- /Text title -->
		                    </div>
		                </div>
		                 <!-- /Texts container -->
		            </div>
		            <?php }}?>




		            <!-- /Duplicate to create more slides -->
		        </div>
		        <div class="timers"> </div>
		        <div class="slidePrev"><span> </span></div>
		        <div class="slideNext"><span> </span></div>
		    </div>
			
		    <!--/slider -->
		</div>
			</div>
<!--start main -->

        <table>
        	<tr>
        		<td>
					<div id="container_3_3">	
						<div class="container_3_3_head"> Enlaces Externos</div>
	
						<div class="container_3_3_label">
						<table>
							<tr><center>
								<td><a href="http://www.bibliotecayacucho.gob.ve/" target="_target"><img src="web/images/1.jpg"></a></td>
								<td><a href="http://www.fundayacucho.gob.ve/" target="_target"><img src="web/images/2.jpg"></a></td>
								<td><a href="http://ingreso.opsu.gob.ve/" target="_target"><img src="web/images/3.jpg"></a></td>
							</tr></center>
						</table>
						</div>
		
					</div>
				</td>
        		<td>
					<div id="container_3_3">	
						<div class="container_3_3_head"> Pasantias</div>
	
						<div class="container_3_3_label"><table><tr><center><td><img src="web/images/pasantias.jpg"></td></tr></table></center></div>
		
					</div>
				</td>
			</tr>	
		</table>

<!--start main -->
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