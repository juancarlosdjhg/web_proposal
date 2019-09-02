<?php
include('bd.php');
conectar();


$titulo=$_POST["titulo"];
$contenido=$_POST["contenido"];
$resumen=$_POST["resumen"];
$autor=$_POST["autor"];
$fecha=$_POST["fecha"];

$maximo0=("SELECT MAX(id_imagen) FROM imagen");
$r=mysql_query($maximo0);
$r2=mysql_fetch_array($r);
$max_imagen=$r2[0]+1;

$maximo1=("SELECT MAX(id_noticia) FROM noticia");
$s=mysql_query($maximo1);
$s2=mysql_fetch_array($s);
$max_noticia=$s2[0]+1;



    $ruta = './web/images_noticia'; //Decalaramos una variable con la ruta en donde almacenaremos los archivos
$mensage = '';//Declaramos una variable mensaje quue almacenara el resultado de las operaciones.
foreach ($_FILES as $key) //Iteramos el arreglo de archivos
{
    if($key['error'] == UPLOAD_ERR_OK )//Si el archivo se paso correctamente Ccontinuamos 
        {
            $NombreOriginal = $key['name'];//Obtenemos el nombre original del archivo
            $temporal = $key['tmp_name']; //Obtenemos la ruta Original del archivo
            $Destino = $ruta.$NombreOriginal;   //Creamos una ruta de destino con la variable ruta y el nombre original del archivo 
            
            move_uploaded_file($temporal, $Destino); //Movemos el archivo temporal a la ruta especificada

            $tirasql="INSERT INTO imagen VALUES ('', '.$Destino.', ''$max_noticia')";
            $a=mysql_query($tirasql);
            if (!$a){

                echo "no se inseto la(s) imagene(s)";
            }

            else
                echo "se inserto imagen(es)";


        }

    if ($key['error']=='') //Si no existio ningun error, retornamos un mensaje por cada archivo subido
        {
            $mensage .= '-> Archivo <b>'.$NombreOriginal.'</b> Subido correctamente. <br>';
        }
    if ($key['error']!='')//Si existio algún error retornamos un el error por cada archivo.
        {
            $mensage .= '-> No se pudo subir el archivo <b>'.$NombreOriginal.'</b> debido al siguiente Error: \n'.$key['error']; 
        }
    
}
echo $mensage;// Regresamos los mensajes generados al cliente

  $tirasql2="INSERT INTO noticia VALUES ('', '$titulo', '$contenido', '$resumen', '$autor', '$fecha', '$max_imagen')";
        $b=mysql_query($tirasql2);

     if (!$b){

                echo "no se inserto la noticia";
            }

    else
        echo "se inserto la noticia";   



?>