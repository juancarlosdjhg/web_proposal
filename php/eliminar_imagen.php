<?php
include('bd.php');
conectar();


$imagen=$_GET['id'];
$noticia=$_GET['noticia'];

echo "$noticia";

$query = "delete from imagen_noticia where id_imagen = '$imagen' and id_noticia='$noticia'";  
$result = mysql_query($query);  

$registros_imagen=mysql_query("select * from imagen where id_imagen='$imagen'");
while ($img=mysql_fetch_array($registros_imagen)){


		$query = "delete from imagen where id_imagen = '$imagen'";  
				$result = mysql_query($query);  

unlink('../'.$img['direccion']);

}



if(!$result){

	echo "<script> alert('La Noticia no se elimino')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../modificar_noticia.php?id=$noticia'>";
}
else{
	echo "<script> alert('Imagen Eliminada')</script>";
	header("refresh: 0.1; URL=../modificar_noticia.php?id=$noticia");
	exit;
	ob_end_flush();

}




?>