<html>

<head><meta charset="utf-8"></head></html>
<?php
include('bd.php');
conectar();
$contrasenia=$_POST['contrasenia'];
$usuario=$_POST['usuario'];

$ingresar="SELECT * FROM usuario WHERE usuario='".$usuario."' AND contrasenia='".$contrasenia."' ";
$resultado=mysql_query($ingresar);

$num=mysql_num_rows($resultado);
if($num==0){
	echo "<script> alert('Usuario y/o Contraseña Incorrecta')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../login.html'>";
			}
else{
	echo "<script> alert('Bienvenido Web Master')</script>";
	echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../menu_admin.html'>";

}
			
			
			?>

