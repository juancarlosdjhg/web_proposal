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
   <li><a href='activities2.php'><span>Noticias & Eventos</span></a></li>
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
<!--start main -->
<div class="wrap">
	<div class="main">
		<div class="contact">				
				<div class="contact_left">
					<div class="contact_info">
			    	 	<h3>Encuentranos aqui</h3>
			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3925.128676461481!2d-68.759838!3d10.331586!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e80c8d433543891%3A0x5d6f1945598c22ac!2sI.U.T.Y.!5e0!3m2!1ses-419!2s!4v1413069431215"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color: #242424;text-shadow: 0 1px 0 #ffffff;text-align: left;font-size: 0.7125em;padding: 5px;font-weight: 600;">View Larger Map</a></small>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h3>Información de la Institución :</h3>
						<p>Independencia</p>
						<p>Yaracuy</p>
				   		<p>Telefono:(00) 000 000 000</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <a href="iuty@iuty.com">iuty@iuty.com</a></p>
				   		<p>Síguenos en: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
				   </div>
				</div>				
				<div class="contact_right">
				  <div class="contact-form">
				  	<h3>Contáctanos</h3>
					    <form method="post" action="php/contacto.php">
					    	<div>
						    	<span><label>NOMBRE</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>TELEFONO</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>ASUNTO</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="ENVIAR"></span>
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