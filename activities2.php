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
		</div>
		<div class="clear"></div>
		<div class="top-nav">
		<nav class="clearfix">
				<ul>
				<li  class="active"><a href="index.html">Inicio</a></li> 
				<li><a href="about.html">Acerca de</a></li> 
				<li><a href="gallery.html">Galeria de fotos</a></li> 
				<li><a href="activities.html">Noticias & Eventos</a></li> 
				<li><a href="contact.html">Contáctanos</a></li>
				</ul>
				<a href="#" id="pull">Menu</a>
			</nav>
		</div>
	</div>
</div>
</div>
<!--start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
<!-- start main_content -->

			<ul class="service_list">

<?php


$url = "http://localhost/portal/activities2.php";
$rs_noticias=mysql_query("SELECT * FROM noticia");
$num_total_registros=mysql_num_rows($rs_noticias);
//Si hay registros
if ($num_total_registros > 0) {
	//Limito la busqueda
	$TAMANO_PAGINA = 4;
        $pagina = false;

	//examino la pagina a mostrar y el inicio del registro a mostrar
        if (isset($_GET["pagina"]))
            $pagina = $_GET["pagina"];
        
	if (!$pagina) {
		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina - 1) * $TAMANO_PAGINA;
	}
	//calculo el total de paginas
	$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

	$consulta = "SELECT * FROM noticia ORDER BY id_noticia DESC LIMIT ".$inicio."," . $TAMANO_PAGINA;
	$rs = mysql_query($consulta);

	while ($row = mysql_fetch_array($rs)) {

		$idn=$row['id_noticia'];

					$registros_imagen=mysql_query("select * from imagen where id_noticia='$idn'");
					if ($img=mysql_fetch_array($registros_imagen)){


?>
					<li>
						<div class="ser_img">
							<a href="details.php?id=<?php echo $row['id_noticia']?>">
								<img src="<?php echo $img['direccion'] ?>"/>
								<span class="next"> </span>
							</a>
						</div>	
						<a href="details.php?id=<?php echo $row['id']?>"><h3><?php echo $row['titulo']?></h3></a>
						</p>
						<h4><a href="details.php?id=<?php echo $row['id']?>">Leer Más</a></h4>
					</li>
<?php }} ?>

					<div class="clear"></div>			
				</ul>
									
		<div class="clear"></div>
	<!-- end main_content -->



	</div>
	<div class="n-b">
	<?php	
							if ($total_paginas > 1) {
		if ($pagina != 1)
			echo '<a class="navigation-arrow-left" a href="'.$url.'?pagina='.($pagina-1).'"></a>';
		for ($i=1;$i<=$total_paginas;$i++) {
			if ($pagina == $i){
				//si muestro el �ndice de la p�gina actual, no coloco enlace


				echo '<span class="navigation-bar-active">';
				echo $pagina;
				echo '</span>';

			}else
				//si el �ndice no corresponde con la p�gina mostrada actualmente,
				//coloco el enlace para ir a esa p�gina
				echo '  <a class="navigation-bar" href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
		}
		if ($pagina != $total_paginas)
			echo '<a class="navigation-arrow-right" href="'.$url.'?pagina='.($pagina+1).'"></a>';
	}}?>
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