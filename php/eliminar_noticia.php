<?php
include('bd.php');
conectar();


$noticia=$_GET['id'];



$queryID = "select id_imagen from imagen_noticia where id_noticia= '$noticia'";  
$resultID = mysql_query($queryID);


$query2 = "delete from imagen_noticia where id_noticia= '$noticia'";  
	$result2 = mysql_query($query2);

while ($ide=mysql_fetch_array($resultID)){

			$id=$ide['id_imagen'];
$regi=mysql_query("select direccion  as dir from imagen where id_imagen='".$id."'");

	$r=mysql_fetch_array($regi);
	$valor=$r[0];
	
		$borra= "delete from imagen where id_imagen= '".$id."' ";  

			$a=mysql_query($borra);

					$val=$valor;
				unlink('../'.$val);
}



$query = "delete from noticia where id_noticia = '$noticia'";  
$result = mysql_query($query);



     if (!$result){

                 echo "<script> alert('No se elimino la noticia')</script>";
                 echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../index.php'>";
            }

    else{
        echo "<script> alert('Noticia Eliminada')</script>";
        echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../index.php'>";
            }; 

?>