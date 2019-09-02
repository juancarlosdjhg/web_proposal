<?php
include('php/bd.php');
conectar();


$titulo=$_POST["titulo"];
$contenido=$_POST["contenido"];
$resumen=$_POST["resumen"];
$autor=$_POST["autor"];
$fecha=$_POST["fecha"];
$tipo=$_POST["tipo_noticia"];
$destaca=$_POST["destaca"];


$m=("SELECT cast(now() as date)");
		$fec=mysql_query($m);
			$fec2=mysql_fetch_array($fec);
				$fechareg=$fec2[0];
	

  $tirasql2="INSERT INTO noticia VALUES ('', '$titulo', '$contenido', '$resumen', '$autor','$fechareg', '$fecha', '$tipo')";
        $b=mysql_query($tirasql2);

     if (!$b){

                 echo "<script> alert('No se registro la noticia')</script>";
				 echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=index.php'>";
            }

    else{
        echo "<script> alert('Noticia Registrada')</script>";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=index.php'>";
			};   


		
	$maximo1=("SELECT MAX(id_noticia) FROM noticia");
		$s=mysql_query($maximo1);
			$s2=mysql_fetch_array($s);
				$max_noticia=$s2[0];
	
		
		
	foreach ($_FILES["arch"]["error"] as $key => $error) {
    
		if ($error == UPLOAD_ERR_OK) {
			$tmp_name = $_FILES["arch"]["tmp_name"][$key];
				$name = $_FILES["arch"]["name"][$key];
					move_uploaded_file($tmp_name, "web/fotos/$name");
							
					
	$tirasql="INSERT INTO imagen VALUES ('', 'web/fotos/$name', '$max_noticia')";
			$a=mysql_query($tirasql);
			

						}
							}
							
	if($destaca==TRUE){
							
	$tirasql="INSERT INTO noticia_destacada VALUES ('','$max_noticia')";
			$a=mysql_query($tirasql);			
							}
								
		
		
		
		
?>