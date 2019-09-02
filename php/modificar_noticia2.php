<?php
include('bd.php');
conectar();



 if(isset($_POST['modificar'])){


$id_noticia=$_POST["id_noticia"];
$titulo=$_POST["titulo"];
$contenido=$_POST["contenido"];
$resumen=$_POST["resumen"];
$autor=$_POST["autor"];
$fecha=$_POST["fecha"];
$tipo=$_POST["tipo_noticia"];
$destaca=$_POST["destaca"];


				if($destaca==TRUE)
				$valor=1;
				else
				$valor=0;
				
$sql = "UPDATE noticia SET titulo='$titulo', contenido='$contenido', resumen='$resumen', autor='$autor', fecha='$fecha',noticia_destacada='$valor', id_tipo_noticia='$tipo' where id_noticia='$id_noticia'";
$result = mysql_query($sql);

     if (!$result){

                 echo "<script> alert('No se modifico la noticia')</script>";
               
            }

    else{
        echo "<script> alert('Noticia Modificada')</script>";
      
            }; 


}

 
    foreach ($_FILES["arch"]["error"] as $key => $error) {
    
		if ($error == UPLOAD_ERR_OK) {
			$tmp_name = $_FILES["arch"]["tmp_name"][$key];
				$name = $_FILES["arch"]["name"][$key];


	$result=mysql_query("SELECT MAX(id_imagen)+2 as total from imagen");
	$data=mysql_fetch_assoc($result);
	$nombrei=($data['total']).'.jpg';


			move_uploaded_file($tmp_name, "../web/fotos/$nombrei");
							
					
	$tirasql="INSERT INTO imagen VALUES ('', 'web/fotos/$nombrei')";
			$a=mysql_query($tirasql);
		
				
	$maximo1=("SELECT MAX(id_imagen) FROM imagen");
		$s=mysql_query($maximo1);
			$s2=mysql_fetch_array($s);
				$max_img=$s2[0];
	
		
	$tirasql="INSERT INTO imagen_noticia VALUES ('', '$max_img', '$id_noticia')";
			$a=mysql_query($tirasql);		

						}
							}




 
  echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../index.php'>";


?>