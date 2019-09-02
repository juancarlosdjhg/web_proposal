<?php 
session_start();


$id = $_GET["id"]; 
$enlace = 'web/programa/pensum'."/".$id; 
header ("Content-Disposition: attachment; filename=".$id."\n\n"); 
header ("Content-Type: application/octet-stream"); 
header ("Content-Length: ".filesize($enlace)); 
readfile($enlace); 

	

?>