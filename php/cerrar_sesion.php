<?php 
session_start();
unset ($_SESSION["sesionActiva"]);
session_destroy();
	echo "<script> alert('Hasta Luego')</script>";
	echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";
			


?>