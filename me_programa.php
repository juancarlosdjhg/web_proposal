<?php
include('php/bd.php');
conectar();

$id_programa=$_POST["id_programa"];



    if(isset($_POST['MODIFICAR'])){
	
		$nombre=$_POST["nombre"];
			$mision=$_POST["mision"];
				$vision=$_POST["vision"];
					$perfil=$_POST["perfil_egresado"];
					
	if(isset($_FILES["logo"]))
	 {
    
			$tmp_name = $_FILES["logo"]["tmp_name"];
				$name = $_FILES["logo"]["name"];
	if($name!=''){			
	$result=mysql_query("SELECT MAX(id_programa)+1 as pen from programa");
	$data=mysql_fetch_assoc($result);
	$nombrei=($data['pen']).$name;

		$result=mysql_query("SELECT direccion_logo as dire from programa where id_programa='$id_programa'");
			$data=mysql_fetch_array($result);
				$dire_vieja=$data['dire'];


	$result = mysql_query("update programa set direccion_logo='web/programa/logo/$nombrei' where id_programa = '$id_programa'");  
					
				if($result){
					if($dire_vieja!='web/images/service.png')
					   unlink($dire_vieja);
						move_uploaded_file($tmp_name, "web/programa/logo/$nombrei");			
							}
				
				}			
				
		}	//fin modificar logo

	if(isset($_FILES['pensum']))		
		{
	
			$fecha=$_POST['anio'];
			
			$tmp_name = $_FILES["pensum"]["tmp_name"];
				$name = $_FILES["pensum"]["name"];

	if($name!=''){
	$result=mysql_query("SELECT MAX(id_pensum)+1 as pen from pensum");
	 $data=mysql_fetch_assoc($result);
	  $nombrei=($data['pen']).$name;


		move_uploaded_file($tmp_name, "web/programa/pensum/$nombrei");
							
	
	$b4=mysql_query("INSERT INTO pensum VALUES ('','web/programa/pensum/$nombrei','$fecha','$id_programa')");

			
	
				}	} //fin insertar pensum
	
	if(isset($_FILES['imagenes'])){
	
	
	
	foreach ($_FILES["imagenes"]["error"] as $key => $error) {
    
		if ($error == UPLOAD_ERR_OK) {
			$tmp_name = $_FILES["imagenes"]["tmp_name"][$key];
				$name = $_FILES["imagenes"]["name"][$key];

	if($name!=''){
	$result=mysql_query("SELECT MAX(id_imagen)+2 as total from imagen");
	$data=mysql_fetch_assoc($result);
	$nombrei=($data['total']).'.jpg';

	move_uploaded_file($tmp_name, "web/programa/fotos/$nombrei");
							
					
			$a=mysql_query("INSERT INTO imagen VALUES ('', 'web/programa/fotos/$nombrei')");
		
					
		$s=mysql_query("SELECT MAX(id_imagen) FROM imagen");
			$s2=mysql_fetch_array($s);
				$max_img=$s2[0];
	
		

			$a=mysql_query("INSERT INTO imagen_programa VALUES ('', '$max_img', '$id_programa')");		

						}
						
											
							}
	
	
									}
			
									}
	
         
            $resultado=mysql_query("UPDATE programa SET nombre_programa='$nombre', mision='$mision', vision='$vision', perfil_egresado='$perfil' WHERE id_programa='$id_programa'");
            if($resultado)
               
				echo "<script> alert('Programa Modificado')</script>";
				
			else 
				echo "<script> alert('Programa No Modificado')</script>";
				
   echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=modificar_programa.php?id=$id_programa'>";
   
   
   
   } //fin modificar
   else if(isset($_POST['ELIMINAR'])){
   
  	$resultID = mysql_query("select id_imagen from imagen_programa where id_programa= '$id_programa'");

		$result2 = mysql_query("delete from imagen_programa where id_programa= '$id_programa'");

if($result2)
	while ($ide=mysql_fetch_array($resultID)){

			$id=$ide['id_imagen'];
			
		$regi=mysql_query("select direccion  as dir from imagen where id_imagen='".$id."'");

			$r=mysql_fetch_array($regi);
				$valor=$r[0];
	
				$a=mysql_query( "delete from imagen where id_imagen= '".$id."' ");
				
					if($a){
						$val=$valor;
							unlink(''.$val);
							}
}
   
   $IdPensum= mysql_query("select id_pensum from pensum where id_programa= '$id_programa'");
   
			if($IdPensum)
	while ($ide=mysql_fetch_array($IdPensum)){

			$id=$ide['id_pensum'];
			
		$regi=mysql_query("select direccion from pensum where id_pensum='".$id."'");

			$r=mysql_fetch_array($regi);
				$valor=$r[0];
	
				$a=mysql_query( "delete from pensum where id_pensum= '".$id."' ");
				
					if($a){
						$val=$valor;
							unlink(''.$val);
							}
									}
									
   $result=mysql_query("SELECT direccion_logo as dire from programa where id_programa='$id_programa'");
			$data=mysql_fetch_array($result);
				$dire_archivo=$data['dire'];

            $resultado=mysql_query("DELETE FROM programa WHERE id_programa='$id_programa'");
				if($resultado){
				
			if($dire_archivo!='web/images/service.png')
					   unlink($dire_archivo);
						
											}
          
            
    
	  
	
	}

echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=menu_admin.php'>";




?>