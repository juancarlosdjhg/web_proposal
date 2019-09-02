<?php
include('bd.php');
conectar();
$tipo=$_GET['tipo'];
if($tipo==1){

$imagen=$_GET['id'];
$programa=$_GET['programa'];


$query = "delete from imagen_programa where id_imagen = '$imagen' and id_programa='$programa'";  
$result = mysql_query($query);  

$registros_imagen=mysql_query("select * from imagen where id_imagen='$imagen'");
	while ($img=mysql_fetch_array($registros_imagen)){


		$query = "delete from imagen where id_imagen = '$imagen'";  
				$result = mysql_query($query);  

		unlink('../'.$img['direccion']);

				}



if(!$result){

	echo "<script> alert('La Imagen no se elimino')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../modificar_programa.php?id=$programa'>";
}
else{
	echo "<script> alert('Imagen Eliminada')</script>";
	header("refresh: 0.1; URL=../modificar_programa.php?id=$programa");
	exit;
	ob_end_flush();

}



}
else
if($tipo==2){


$programa=$_GET['programa'];

$registros_imagen=mysql_query("select direccion_logo as direccion from programa where id_programa='$programa'");
$imgs=mysql_fetch_array($registros_imagen);


		$query = "update programa set direccion_logo='web/images/service.png' where id_programa = '$programa'";  
				$result = mysql_query($query);  

		unlink('../'.$imgs['direccion']);

		

if(!$result){

	echo "<script> alert('El logo no se elimino')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../modificar_programa.php?id=$programa'>";
}
else{
	echo "<script> alert('Logo Eliminado')</script>";
	header("refresh: 0.1; URL=../modificar_programa.php?id=$programa");
	exit;
	ob_end_flush();

}




}
else
if($tipo==3){


$pensum=$_GET['pensum'];
$programa=$_GET['programa'];


$registros_imagen=mysql_query("select direccion as direccion from pensum where id_programa='$programa' and id_pensum='$pensum'");
$imgs=mysql_fetch_array($registros_imagen);


		$query = "delete from pensum where id_pensum='$pensum' and id_programa='$programa'";  
				$result = mysql_query($query);  

		unlink('../'.$imgs['direccion']);


if(!$result){

	echo "<script> alert('El pensum no se elimino')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../modificar_programa.php?id=$programa'>";
}
else{
	echo "<script> alert('Pensum Eliminado')</script>";
	header("refresh: 0.1; URL=../modificar_programa.php?id=$programa");
	exit;
	ob_end_flush();

}




}



?>