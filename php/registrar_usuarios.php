<?php
include('bd.php');
conectar();


$user=$_POST["user"];
$pass=$_POST["pass"];
$passMD5=md5($pass);
 $tirasql="INSERT INTO usuario VALUES ('', '$user', '$passMD5')";
        $ejecucion=mysql_query($tirasql);
        	if(!$ejecucion)
        		echo "No se registro";
        	else
        		echo "Registro Exitoso";


?>